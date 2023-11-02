# SporkLib

I really like SparkLib. I think there's a lot of neat, useful stuff in the code, especially
for developers like me that prefer raw-doggin' PHP over Laravel or Symfony frameworks.
This is my attempt to rework SparkLib with an emphasis on the more modern PHP development
best practices that started to gain steam in the PHP 7+ era.

### Basic Goals
- [ ] Compatibility w/ PHP 8.0
- [ ] Modern PHP best practices (using new post-PHP7 language features)
- [ ] PHP-FIG PSR compliance
- [ ] Unit Tests (PHPUnit)
- [ ] Documentation
- [ ] Code quality tooling

Ideally if I get anywhere with this project before completely losing interest or getting
distracted by the next shiny object like a corvid, I hope to submit the changes upstream
to papa SparkLib. But, for now, I have this experimental fork to hack away on.

SparkLib
--------

SparkLib is a modest collection of PHP libraries from your friends at SparkFun
Electronics.

We find these useful; maybe you will too. That said, we lay no special claims
to originality or general applicability.  Interfaces herein are unstable, the
wheel is reinvented often, and most features depend on a recent stable release
of the language. Cleverness is avoided where possible.

Some of the contents of this repository contain dependencies external to
SparkLib, there are no unit tests provided, and example code for the
Application stuff is notably lacking.  We'll work on all of that.

Documentation, such as it is, can generally be found in the code.

Contents include:

* Autoloader - a simple, almost-standards-compliant autoloader
* Application - a web application framework
* Bugzilla - a very simple client for a subset of the Bugzilla API
* Fail - a simple error and exception logging facility
* Iterator - A base class with extra methods for SPL Iterators
* SocialNoise - quick and dirty display of search results for some social networks
* Template - an object wrapper for using PHP files as templates
* Util - a miscellany
* jsonRPC - a half-baked fork of Sergio Vaccaro's JSON-RPC code

-- bpb
