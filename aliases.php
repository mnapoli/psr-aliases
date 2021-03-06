<?php

// PSR-3
class_alias('Psr\Log\LoggerInterface', 'Psr\Log\Logger', false);

// PSR-6
class_alias('Psr\Cache\CacheItemInterface', 'Psr\Cache\CacheItem', false);
class_alias('Psr\Cache\CacheItemPoolInterface', 'Psr\Cache\CacheItemPool', false);

// PSR-7
class_alias('Psr\Http\Message\MessageInterface', 'Psr\Http\Message\Message', false);
class_alias('Psr\Http\Message\RequestInterface', 'Psr\Http\Message\Request', false);
class_alias('Psr\Http\Message\ResponseInterface', 'Psr\Http\Message\Response', false);
class_alias('Psr\Http\Message\ServerRequestInterface', 'Psr\Http\Message\ServerRequest', false);
class_alias('Psr\Http\Message\StreamInterface', 'Psr\Http\Message\Stream', false);
class_alias('Psr\Http\Message\UploadedFileInterface', 'Psr\Http\Message\UploadedFile', false);
class_alias('Psr\Http\Message\UriInterface', 'Psr\Http\Message\Uri', false);

// PSR-13
class_alias('Psr\Link\LinkInterface', 'Psr\Link\Link', false);
class_alias('Psr\Link\EvolvableLinkInterface', 'Psr\Link\EvolvableLink', false);
class_alias('Psr\Link\LinkProviderInterface', 'Psr\Link\LinkProvider', false);
class_alias('Psr\Link\EvolvableLinkProviderInterface', 'Psr\Link\EvolvableLinkProvider', false);

// PSR-16
class_alias('Psr\SimpleCache\CacheInterface', 'Psr\SimpleCache\Cache', false);
