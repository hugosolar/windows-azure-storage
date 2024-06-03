function generateCacheVar(length) {
  var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  var result = '';
  
  for (var i = 0; i < length; i++) {
    var randomIndex = Math.floor(Math.random() * characters.length);
    result += characters[randomIndex];
  }
  
  return result;
}

var replaceMedia = function(attachmentID) {
  var mediaUploader;
  
  if (mediaUploader) {
    mediaUploader.open();
    return;
  }

  mediaUploader = wp.media.frames.file_frame = wp.media({
    title: AzureMediaReplaceObject.i18n.title,
    frame: 'select',
    button: {
      text: AzureMediaReplaceObject.i18n.replaceMediaButton,
    },
    multiple: false
  }).on('select', function(){
    console.log(mediaUploader.state().get( 'selection' ));
    var attachment = mediaUploader.state().get( 'selection' ).first().toJSON();
    jQuery.ajax({
      type: 'post',
      url: AzureMediaReplaceObject.ajaxUrl,
      data: {
        action: 'azure-storage-media-replace',
        current_attachment: attachmentID,
        nonce: AzureMediaReplaceObject.nonce,
        replace_attachment: attachment.id,
      },
      dataType: 'JSON',
      beforeSend: function() {
        jQuery('.settings-save-status').find('.spinner').addClass('is-active');
        jQuery('.edit-media-header').find('.media-modal-close').first().prop('disabled', true);
      },
      success: function(result) {
        jQuery('.settings-save-status').find('.spinner').removeClass('is-active');
        jQuery('.edit-media-header').find('.media-modal-close').first().prop('disabled', false);

        var image = jQuery('.media-modal').find('.details-image').attr('src');
        var cacheVar = generateCacheVar(7);

        jQuery('.media-modal').find('.details-image').attr('src', image + '?v=' + cacheVar );

        var medium_img = image;
        if ( result.meta_data.sizes.medium.length ) {
          medium_img = result.meta_data.sizes.medium;
        } else if( result.meta_data.sizes.thumbnail.length ) {
          medium_img = result.meta_data.sizes.thumbnail;
        }

        jQuery('.attachments-wrapper').find('li[data-id="'+ result.ID +'"]').find('img').first().attr('src', medium_img + '?v=' + cacheVar );

        jQuery('.attachments-wrapper').find('li[data-id="'+ result.old_ID +'"]').remove();
      }
    });
    
  });
  
  mediaUploader.on('open', function(){
    mediaUploader.reset();
    var context = jQuery(mediaUploader.el);
    var tab = context.find('#menu-item-upload');
    var browse = context.find('#menu-item-browse');
    browse.css('display', 'none');
    tab.trigger('click');
  });

  mediaUploader.open();
};
