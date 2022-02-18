<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0645d8a79413e9a4e847fd506fdff3e1
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
        ),
        'M' => 
        array (
            'MicrosoftAzure\\Storage\\Common\\' => 30,
            'MicrosoftAzure\\Storage\\Blob\\' => 28,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'MicrosoftAzure\\Storage\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common',
        ),
        'MicrosoftAzure\\Storage\\Blob\\' => 
        array (
            0 => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'GuzzleHttp\\BodySummarizer' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/BodySummarizer.php',
        'GuzzleHttp\\BodySummarizerInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/BodySummarizerInterface.php',
        'GuzzleHttp\\Client' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Client.php',
        'GuzzleHttp\\ClientInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientInterface.php',
        'GuzzleHttp\\ClientTrait' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientTrait.php',
        'GuzzleHttp\\Cookie\\CookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
        'GuzzleHttp\\Cookie\\CookieJarInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
        'GuzzleHttp\\Cookie\\FileCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
        'GuzzleHttp\\Cookie\\SessionCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
        'GuzzleHttp\\Cookie\\SetCookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
        'GuzzleHttp\\Exception\\BadResponseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
        'GuzzleHttp\\Exception\\ClientException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
        'GuzzleHttp\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
        'GuzzleHttp\\Exception\\GuzzleException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
        'GuzzleHttp\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/InvalidArgumentException.php',
        'GuzzleHttp\\Exception\\RequestException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
        'GuzzleHttp\\Exception\\ServerException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
        'GuzzleHttp\\Exception\\TooManyRedirectsException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
        'GuzzleHttp\\Exception\\TransferException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
        'GuzzleHttp\\HandlerStack' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/HandlerStack.php',
        'GuzzleHttp\\Handler\\CurlFactory' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
        'GuzzleHttp\\Handler\\CurlFactoryInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
        'GuzzleHttp\\Handler\\CurlHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
        'GuzzleHttp\\Handler\\CurlMultiHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
        'GuzzleHttp\\Handler\\EasyHandle' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
        'GuzzleHttp\\Handler\\HeaderProcessor' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/HeaderProcessor.php',
        'GuzzleHttp\\Handler\\MockHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/MockHandler.php',
        'GuzzleHttp\\Handler\\Proxy' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/Proxy.php',
        'GuzzleHttp\\Handler\\StreamHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
        'GuzzleHttp\\MessageFormatter' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/MessageFormatter.php',
        'GuzzleHttp\\MessageFormatterInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/MessageFormatterInterface.php',
        'GuzzleHttp\\Middleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Middleware.php',
        'GuzzleHttp\\Pool' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Pool.php',
        'GuzzleHttp\\PrepareBodyMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
        'GuzzleHttp\\Promise\\AggregateException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/AggregateException.php',
        'GuzzleHttp\\Promise\\CancellationException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/CancellationException.php',
        'GuzzleHttp\\Promise\\Coroutine' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Coroutine.php',
        'GuzzleHttp\\Promise\\Create' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Create.php',
        'GuzzleHttp\\Promise\\Each' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Each.php',
        'GuzzleHttp\\Promise\\EachPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/EachPromise.php',
        'GuzzleHttp\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/FulfilledPromise.php',
        'GuzzleHttp\\Promise\\Is' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Is.php',
        'GuzzleHttp\\Promise\\Promise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Promise.php',
        'GuzzleHttp\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromiseInterface.php',
        'GuzzleHttp\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromisorInterface.php',
        'GuzzleHttp\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectedPromise.php',
        'GuzzleHttp\\Promise\\RejectionException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectionException.php',
        'GuzzleHttp\\Promise\\TaskQueue' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueue.php',
        'GuzzleHttp\\Promise\\TaskQueueInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueueInterface.php',
        'GuzzleHttp\\Promise\\Utils' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Utils.php',
        'GuzzleHttp\\Psr7\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/AppendStream.php',
        'GuzzleHttp\\Psr7\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/BufferStream.php',
        'GuzzleHttp\\Psr7\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/CachingStream.php',
        'GuzzleHttp\\Psr7\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/DroppingStream.php',
        'GuzzleHttp\\Psr7\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/FnStream.php',
        'GuzzleHttp\\Psr7\\Header' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Header.php',
        'GuzzleHttp\\Psr7\\HttpFactory' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/HttpFactory.php',
        'GuzzleHttp\\Psr7\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/InflateStream.php',
        'GuzzleHttp\\Psr7\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LazyOpenStream.php',
        'GuzzleHttp\\Psr7\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LimitStream.php',
        'GuzzleHttp\\Psr7\\Message' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Message.php',
        'GuzzleHttp\\Psr7\\MessageTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MessageTrait.php',
        'GuzzleHttp\\Psr7\\MimeType' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MimeType.php',
        'GuzzleHttp\\Psr7\\MultipartStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MultipartStream.php',
        'GuzzleHttp\\Psr7\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/NoSeekStream.php',
        'GuzzleHttp\\Psr7\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/PumpStream.php',
        'GuzzleHttp\\Psr7\\Query' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Query.php',
        'GuzzleHttp\\Psr7\\Request' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Request.php',
        'GuzzleHttp\\Psr7\\Response' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Response.php',
        'GuzzleHttp\\Psr7\\Rfc7230' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Rfc7230.php',
        'GuzzleHttp\\Psr7\\ServerRequest' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/ServerRequest.php',
        'GuzzleHttp\\Psr7\\Stream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Stream.php',
        'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
        'GuzzleHttp\\Psr7\\StreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamWrapper.php',
        'GuzzleHttp\\Psr7\\UploadedFile' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UploadedFile.php',
        'GuzzleHttp\\Psr7\\Uri' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Uri.php',
        'GuzzleHttp\\Psr7\\UriNormalizer' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriNormalizer.php',
        'GuzzleHttp\\Psr7\\UriResolver' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriResolver.php',
        'GuzzleHttp\\Psr7\\Utils' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Utils.php',
        'GuzzleHttp\\RedirectMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RedirectMiddleware.php',
        'GuzzleHttp\\RequestOptions' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RequestOptions.php',
        'GuzzleHttp\\RetryMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RetryMiddleware.php',
        'GuzzleHttp\\TransferStats' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/TransferStats.php',
        'GuzzleHttp\\Utils' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Utils.php',
        'MicrosoftAzure\\Storage\\Blob\\BlobRestProxy' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/BlobRestProxy.php',
        'MicrosoftAzure\\Storage\\Blob\\BlobSharedAccessSignatureHelper' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/BlobSharedAccessSignatureHelper.php',
        'MicrosoftAzure\\Storage\\Blob\\Internal\\BlobResources' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Internal/BlobResources.php',
        'MicrosoftAzure\\Storage\\Blob\\Internal\\IBlob' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Internal/IBlob.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\AccessCondition' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/AccessCondition.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\AccessTierTrait' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/AccessTierTrait.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\AppendBlockOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/AppendBlockOptions.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\AppendBlockResult' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/AppendBlockResult.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\Blob' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/Blob.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\BlobAccessPolicy' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/BlobAccessPolicy.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\BlobBlockType' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/BlobBlockType.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\BlobPrefix' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/BlobPrefix.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\BlobProperties' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/BlobProperties.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\BlobServiceOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/BlobServiceOptions.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\BlobType' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/BlobType.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\Block' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/Block.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\BlockList' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/BlockList.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\BreakLeaseResult' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/BreakLeaseResult.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\CommitBlobBlocksOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/CommitBlobBlocksOptions.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\Container' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/Container.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\ContainerACL' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/ContainerACL.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\ContainerAccessPolicy' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/ContainerAccessPolicy.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\ContainerProperties' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/ContainerProperties.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\CopyBlobFromURLOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/CopyBlobFromURLOptions.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\CopyBlobOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/CopyBlobOptions.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\CopyBlobResult' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/CopyBlobResult.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\CopyState' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/CopyState.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\CreateBlobBlockOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/CreateBlobBlockOptions.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\CreateBlobOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/CreateBlobOptions.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\CreateBlobPagesOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/CreateBlobPagesOptions.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\CreateBlobPagesResult' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/CreateBlobPagesResult.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\CreateBlobSnapshotOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/CreateBlobSnapshotOptions.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\CreateBlobSnapshotResult' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/CreateBlobSnapshotResult.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\CreateBlockBlobOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/CreateBlockBlobOptions.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\CreateContainerOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/CreateContainerOptions.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\CreatePageBlobFromContentOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/CreatePageBlobFromContentOptions.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\CreatePageBlobOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/CreatePageBlobOptions.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\DeleteBlobOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/DeleteBlobOptions.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\GetBlobMetadataOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/GetBlobMetadataOptions.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\GetBlobMetadataResult' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/GetBlobMetadataResult.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\GetBlobOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/GetBlobOptions.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\GetBlobPropertiesOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/GetBlobPropertiesOptions.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\GetBlobPropertiesResult' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/GetBlobPropertiesResult.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\GetBlobResult' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/GetBlobResult.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\GetContainerACLResult' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/GetContainerACLResult.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\GetContainerPropertiesResult' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/GetContainerPropertiesResult.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\LeaseMode' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/LeaseMode.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\LeaseResult' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/LeaseResult.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\ListBlobBlocksOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/ListBlobBlocksOptions.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\ListBlobBlocksResult' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/ListBlobBlocksResult.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\ListBlobsOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/ListBlobsOptions.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\ListBlobsResult' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/ListBlobsResult.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\ListContainersOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/ListContainersOptions.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\ListContainersResult' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/ListContainersResult.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\ListPageBlobRangesDiffResult' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/ListPageBlobRangesDiffResult.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\ListPageBlobRangesOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/ListPageBlobRangesOptions.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\ListPageBlobRangesResult' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/ListPageBlobRangesResult.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\PageWriteOption' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/PageWriteOption.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\PublicAccessType' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/PublicAccessType.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\PutBlobResult' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/PutBlobResult.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\PutBlockResult' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/PutBlockResult.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\SetBlobMetadataResult' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/SetBlobMetadataResult.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\SetBlobPropertiesOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/SetBlobPropertiesOptions.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\SetBlobPropertiesResult' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/SetBlobPropertiesResult.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\SetBlobTierOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/SetBlobTierOptions.php',
        'MicrosoftAzure\\Storage\\Blob\\Models\\UndeleteBlobOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob/Models/UndeleteBlobOptions.php',
        'MicrosoftAzure\\Storage\\Common\\CloudConfigurationManager' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/CloudConfigurationManager.php',
        'MicrosoftAzure\\Storage\\Common\\Exceptions\\InvalidArgumentTypeException' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Exceptions/InvalidArgumentTypeException.php',
        'MicrosoftAzure\\Storage\\Common\\Exceptions\\ServiceException' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Exceptions/ServiceException.php',
        'MicrosoftAzure\\Storage\\Common\\Internal\\ACLBase' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Internal/ACLBase.php',
        'MicrosoftAzure\\Storage\\Common\\Internal\\Authentication\\IAuthScheme' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Internal/Authentication/IAuthScheme.php',
        'MicrosoftAzure\\Storage\\Common\\Internal\\Authentication\\SharedAccessSignatureAuthScheme' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Internal/Authentication/SharedAccessSignatureAuthScheme.php',
        'MicrosoftAzure\\Storage\\Common\\Internal\\Authentication\\SharedKeyAuthScheme' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Internal/Authentication/SharedKeyAuthScheme.php',
        'MicrosoftAzure\\Storage\\Common\\Internal\\Authentication\\TokenAuthScheme' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Internal/Authentication/TokenAuthScheme.php',
        'MicrosoftAzure\\Storage\\Common\\Internal\\ConnectionStringParser' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Internal/ConnectionStringParser.php',
        'MicrosoftAzure\\Storage\\Common\\Internal\\ConnectionStringSource' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Internal/ConnectionStringSource.php',
        'MicrosoftAzure\\Storage\\Common\\Internal\\Http\\HttpCallContext' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Internal/Http/HttpCallContext.php',
        'MicrosoftAzure\\Storage\\Common\\Internal\\Http\\HttpFormatter' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Internal/Http/HttpFormatter.php',
        'MicrosoftAzure\\Storage\\Common\\Internal\\MetadataTrait' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Internal/MetadataTrait.php',
        'MicrosoftAzure\\Storage\\Common\\Internal\\Middlewares\\CommonRequestMiddleware' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Internal/Middlewares/CommonRequestMiddleware.php',
        'MicrosoftAzure\\Storage\\Common\\Internal\\Resources' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Internal/Resources.php',
        'MicrosoftAzure\\Storage\\Common\\Internal\\RestProxy' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Internal/RestProxy.php',
        'MicrosoftAzure\\Storage\\Common\\Internal\\Serialization\\ISerializer' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Internal/Serialization/ISerializer.php',
        'MicrosoftAzure\\Storage\\Common\\Internal\\Serialization\\JsonSerializer' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Internal/Serialization/JsonSerializer.php',
        'MicrosoftAzure\\Storage\\Common\\Internal\\Serialization\\MessageSerializer' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Internal/Serialization/MessageSerializer.php',
        'MicrosoftAzure\\Storage\\Common\\Internal\\Serialization\\XmlSerializer' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Internal/Serialization/XmlSerializer.php',
        'MicrosoftAzure\\Storage\\Common\\Internal\\ServiceRestProxy' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Internal/ServiceRestProxy.php',
        'MicrosoftAzure\\Storage\\Common\\Internal\\ServiceRestTrait' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Internal/ServiceRestTrait.php',
        'MicrosoftAzure\\Storage\\Common\\Internal\\ServiceSettings' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Internal/ServiceSettings.php',
        'MicrosoftAzure\\Storage\\Common\\Internal\\StorageServiceSettings' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Internal/StorageServiceSettings.php',
        'MicrosoftAzure\\Storage\\Common\\Internal\\Utilities' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Internal/Utilities.php',
        'MicrosoftAzure\\Storage\\Common\\Internal\\Validate' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Internal/Validate.php',
        'MicrosoftAzure\\Storage\\Common\\LocationMode' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/LocationMode.php',
        'MicrosoftAzure\\Storage\\Common\\Logger' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Logger.php',
        'MicrosoftAzure\\Storage\\Common\\MarkerContinuationTokenTrait' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/MarkerContinuationTokenTrait.php',
        'MicrosoftAzure\\Storage\\Common\\Middlewares\\HistoryMiddleware' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Middlewares/HistoryMiddleware.php',
        'MicrosoftAzure\\Storage\\Common\\Middlewares\\IMiddleware' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Middlewares/IMiddleware.php',
        'MicrosoftAzure\\Storage\\Common\\Middlewares\\MiddlewareBase' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Middlewares/MiddlewareBase.php',
        'MicrosoftAzure\\Storage\\Common\\Middlewares\\MiddlewareStack' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Middlewares/MiddlewareStack.php',
        'MicrosoftAzure\\Storage\\Common\\Middlewares\\RetryMiddleware' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Middlewares/RetryMiddleware.php',
        'MicrosoftAzure\\Storage\\Common\\Middlewares\\RetryMiddlewareFactory' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Middlewares/RetryMiddlewareFactory.php',
        'MicrosoftAzure\\Storage\\Common\\Models\\AccessPolicy' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Models/AccessPolicy.php',
        'MicrosoftAzure\\Storage\\Common\\Models\\CORS' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Models/CORS.php',
        'MicrosoftAzure\\Storage\\Common\\Models\\ContinuationToken' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Models/ContinuationToken.php',
        'MicrosoftAzure\\Storage\\Common\\Models\\GetServicePropertiesResult' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Models/GetServicePropertiesResult.php',
        'MicrosoftAzure\\Storage\\Common\\Models\\GetServiceStatsResult' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Models/GetServiceStatsResult.php',
        'MicrosoftAzure\\Storage\\Common\\Models\\Logging' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Models/Logging.php',
        'MicrosoftAzure\\Storage\\Common\\Models\\MarkerContinuationToken' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Models/MarkerContinuationToken.php',
        'MicrosoftAzure\\Storage\\Common\\Models\\Metrics' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Models/Metrics.php',
        'MicrosoftAzure\\Storage\\Common\\Models\\Range' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Models/Range.php',
        'MicrosoftAzure\\Storage\\Common\\Models\\RangeDiff' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Models/RangeDiff.php',
        'MicrosoftAzure\\Storage\\Common\\Models\\RetentionPolicy' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Models/RetentionPolicy.php',
        'MicrosoftAzure\\Storage\\Common\\Models\\ServiceOptions' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Models/ServiceOptions.php',
        'MicrosoftAzure\\Storage\\Common\\Models\\ServiceProperties' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Models/ServiceProperties.php',
        'MicrosoftAzure\\Storage\\Common\\Models\\SignedIdentifier' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Models/SignedIdentifier.php',
        'MicrosoftAzure\\Storage\\Common\\Models\\TransactionalMD5Trait' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/Models/TransactionalMD5Trait.php',
        'MicrosoftAzure\\Storage\\Common\\SharedAccessSignatureHelper' => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common/SharedAccessSignatureHelper.php',
        'Psr\\Http\\Client\\ClientExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/ClientExceptionInterface.php',
        'Psr\\Http\\Client\\ClientInterface' => __DIR__ . '/..' . '/psr/http-client/src/ClientInterface.php',
        'Psr\\Http\\Client\\NetworkExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/NetworkExceptionInterface.php',
        'Psr\\Http\\Client\\RequestExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/RequestExceptionInterface.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/RequestFactoryInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/ResponseFactoryInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/ServerRequestFactoryInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/StreamFactoryInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/UploadedFileFactoryInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/UriFactoryInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0645d8a79413e9a4e847fd506fdff3e1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0645d8a79413e9a4e847fd506fdff3e1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0645d8a79413e9a4e847fd506fdff3e1::$classMap;

        }, null, ClassLoader::class);
    }
}
