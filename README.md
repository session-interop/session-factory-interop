# Session Interoperability

*session-factory-interop* tries to identify and standardize features in *session* objet to achieve interoperability between PHP package. It does handle creation of object of type [`SessionInterface`](https://github.com/session-interop/session-interop).

Through discussions and trials, we try to create a standard, made of common interfaces but also recommendations.

## Installation

You can install this package through Composer:

```json
composer require session-interop/session-factory-interop
```
The packages adheres to the [SemVer](http://semver.org/) specification, and there will be full backward compatibility between minor versions.

## Implementations

[`DefaultSessionFactory`](https://github.com/session-interop/utils-factory-session)

A basic implementation of the interface.
