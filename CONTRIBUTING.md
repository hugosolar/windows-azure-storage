# Contributing and Maintaining

First, thank you for taking the time to contribute!

The following is a set of guidelines for contributors as well as information and instructions around our maintenance process.  The two are closely tied together in terms of how we all work together and set expectations, so while you may not need to know everything in here to submit an issue or pull request, it's best to keep them in the same document.

## Ways to contribute

Contributing isn't just writing code - it's anything that improves the project.  All contributions are managed right here on GitHub.  Here are some ways you can help:

### Reporting bugs

If you're running into an issue, please take a look through [existing issues](/issues) and [open a new one](/issues/new) if needed.  If you're able, include steps to reproduce, environment information, and screenshots/screencasts as relevant.

### Suggesting enhancements

New features and enhancements are also managed via [issues](/issues).

### Pull requests

Pull requests represent a proposed solution to a specified problem.  They should always reference an issue that describes the problem and contains discussion about the problem itself.  Discussion on pull requests should be limited to the pull request itself, i.e. code review.

For more on how 10up writes and manages code, check out our [10up Engineering Best Practices](https://10up.github.io/Engineering-Best-Practices/).

## Workflow

The `develop` branch is the development branch which means it contains the next version to be released.  `stable` contains the current latest release and `trunk` contains the corresponding stable development version.  Always work on the `develop` branch and open up PRs against `develop`.

## Release instructions

1. Branch: Starting from `develop`, cut a release branch named `release/X.Y.Z` for your changes.
1. Version bump: Bump the version number in `js/windows-azure-storage-admin.js`, `js/windows-azure-storage-media-browser.js`, `js/windows-azure-storage-media-replace.js`, `package.json`, `package-lock.json`, `readme.txt`, and `windows-azure-storage.php` if it does not already reflect the version being released.  Update both the plugin "Version:" property and the plugin `MSFT_AZURE_PLUGIN_VERSION` constant in `windows-azure-storage.php`.
1. Changelog: Add/update the changelog in both `readme.txt` and `CHANGELOG.md`.
1. Props: Update `CREDITS.md` file with any new contributors, confirm maintainers are accurate.
1. New files: Check to be sure any new files/paths that are unnecessary in the production version are included in `.distignore`.
1. Readme updates: Make any other readme changes as necessary.  `README.md` is geared toward GitHub and `readme.txt` contains WordPress.org-specific content.  The two are slightly different.
1. Merge: Make a non-fast-forward merge from your release branch to `develop` (or merge the pull request), then do the same for `develop` into `trunk`, ensuring you pull the most recent changes into `develop` first (`git checkout develop && git pull origin develop && git checkout trunk && git merge --no-ff develop`).  `trunk` contains the stable development version.
1. Push: Push your trunk branch to GitHub (e.g. `git push origin trunk`).
1. [Compare](https://github.com/10up/windows-azure-storage/compare/trunk...develop) trunk to develop to ensure no additional changes were missed.
1. Test the pre-release ZIP locally by [downloading](https://github.com/10up/windows-azure-storage/actions/workflows/build-release-zip.yml) it from the Build release zip action artifact and installing it locally. Ensure this zip has all the files we expect, that it installs and activates correctly and that all basic functionality is working.
1. Release: Create a [new release](https://github.com/10up/windows-azure-storage/releases/new), naming the tag and the release with the new version number, and targeting the `trunk` branch.  Paste the changelog from `CHANGELOG.md` into the body of the release and include a link to the closed issues on the milestone (e.g. `https://github.com/10up/windows-azure-storage/milestone/#?closed=1`).
1. SVN: Wait for the [GitHub Action](https://github.com/10up/windows-azure-storage/actions) to finish deploying to the WordPress.org repository.  If all goes well, users with SVN commit access for that plugin will receive an emailed diff of changes.
1. Check WordPress.org: Ensure that the changes are live on [WordPress.org](https://wordpress.org/plugins/windows-azure-storage/). This may take a few minutes.
1. Close milestone: Edit the [milestone](https://github.com/10up/windows-azure-storage/milestone/#) with release date (in the `Due date (optional)` field) and link to GitHub release (in the `Description` field), then close the milestone.
1. Punt incomplete items: If any open issues or PRs which were milestoned for `X.Y.Z` do not make it into the release, update their milestone to `X.Y.Z+1`, `X.Y+1.0`, `X+1.0.0` or `Future Release`.
