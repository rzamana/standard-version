# Standard Version

[![Build Status](https://travis-ci.org/rzamana/standard-version.svg?branch=master)](https://travis-ci.org/rzamana/standard-version)

This is a PHP composer library fork based on the npm [standard-version](https://github.com/conventional-changelog/standard-version)!

Automatic versioning and CHANGELOG generation, using GitHub's squash button and
[conventional commit messages](https://conventionalcommits.org).

_how it works:_

1. when you land commits on your `master` branch, select the _Squash and Merge_ option.
2. add a title and body that follows the [Conventional Commits Specification](https://conventionalcommits.org).
3. when you're ready to release:
  1. `git checkout master; git pull origin master`
  2. run `standard-version`
  3. `git push --follow-tags origin master && npm publish`

`standard-version` does the following:

1. bumps the version in _composer.json_ (based on your commit history)
2. update _CHANGELOG.md_
3. commits _composer.json (et al.)_ and _CHANGELOG.md_
4. tags a new release

## Installation

_Under construction_

## Commit Message Convention, at a Glance

_patches:_

```sh
git commit -a -m "fix(parsing): fixed a bug in our parser"
```

_features:_

```sh
git commit -a -m "feat(parser): we now have a parser \o/"
```

_breaking changes:_

```sh
git commit -a -m "feat(new-parser): introduces a new parsing library
BREAKING CHANGE: new library does not support foo-construct"
```

_other changes:_

You decide, e.g., docs, chore, etc.

```sh
git commit -a -m "docs: fixed up the docs a bit"
```

_but wait, there's more!_

Github usernames (`@bcoe`) and issue references (#133) will be swapped out for the
appropriate URLs in your CHANGELOG.

## FAQ

_Under Construction_

## License

ISC
