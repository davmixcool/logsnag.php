<div align="center">
	<img src="https://logsnag.com/og-image.png" alt="LogSnag"/>
	<br>
    <h1>LogSnag</h1>
	<p>An un-offical API wrapper for logsnag.com to get notifications and track your project events.</p>
	<a href="https://poser.pugx.org/davmixcool/logsnag.php/v/stable.svg"><img src="https://poser.pugx.org/davmixcool/logsnag.php/v/stable.svg" alt="Stable"></a>
	<a href="https://discord.gg/dY3pRxgWua"><img src="https://img.shields.io/discord/922560704454750245?color=%237289DA&label=Discord" alt="Discord"></a>
	<a href="https://docs.logsnag.com"><img src="https://img.shields.io/badge/Docs-LogSnag" alt="Documentation"></a>
	<br>
	<br>
</div>


## Requirements

- PHP 5.5 and above

## Steps

* [Installation](#installation)
* [Usage](#usage)
* [Initialize Client](#initialize-client)
* [Publish Event](#publish-event)
* [Options](#publish-event)
* [Maintainers](#maintainers)
* [License](#license)




### Installation

**Composer**

Run the following command to include this package via Composer

```shell
composer require davmixcool/logsnag
```


## Usage

### Import Library

```php
use Davmixcool\LogSnag;
```

### Initialize Client

```php
$logsnag = new LogSnag('7f568d735724351757637b1dbf108e5');
```

### Publish Event

```php
$logsnag->publish({
    'project' => "my-saas",
    'channel' => "waitlist",
    'event' => "User Joined",
    'icon' => "🎉",
    'notify' => true
});
```


### Options

Option 	  |	Type	| Description
--------- | ------- | -------
`project` | text `required` |  Project name.
`channel` | text `required` |  Channel Name.
`event` | text `required` |  Event name.
`description` | text `optional` |  Event description.
`icon` | text `optional` |  Single emoji as the event icon.
`notify` | boolean `optional` |  Send push notification.


### Maintainers

This package is maintained by [David Oti](https://davidoti.com) and you!


### License

This package is licensed under the [MIT license](https://github.com/davmixcool/cryptman/blob/master/LICENSE).
