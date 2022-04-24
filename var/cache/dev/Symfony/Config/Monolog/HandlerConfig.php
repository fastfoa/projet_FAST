<?php

namespace Symfony\Config\Monolog;

require_once __DIR__.\DIRECTORY_SEPARATOR.'HandlerConfig'.\DIRECTORY_SEPARATOR.'ExcludedHttpCodeConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'HandlerConfig'.\DIRECTORY_SEPARATOR.'PublisherConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'HandlerConfig'.\DIRECTORY_SEPARATOR.'MongoConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'HandlerConfig'.\DIRECTORY_SEPARATOR.'ElasticsearchConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'HandlerConfig'.\DIRECTORY_SEPARATOR.'RedisConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'HandlerConfig'.\DIRECTORY_SEPARATOR.'PredisConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'HandlerConfig'.\DIRECTORY_SEPARATOR.'EmailPrototypeConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'HandlerConfig'.\DIRECTORY_SEPARATOR.'VerbosityLevelsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'HandlerConfig'.\DIRECTORY_SEPARATOR.'ChannelsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class HandlerConfig 
{
    private $type;
    private $id;
    private $priority;
    private $level;
    private $bubble;
    private $appName;
    private $includeStacktraces;
    private $processPsr3Messages;
    private $path;
    private $filePermission;
    private $useLocking;
    private $filenameFormat;
    private $dateFormat;
    private $ident;
    private $logopts;
    private $facility;
    private $maxFiles;
    private $actionLevel;
    private $activationStrategy;
    private $stopBuffering;
    private $passthruLevel;
    private $excluded404s;
    private $excludedHttpCodes;
    private $acceptedLevels;
    private $minLevel;
    private $maxLevel;
    private $bufferSize;
    private $flushOnOverflow;
    private $handler;
    private $url;
    private $exchange;
    private $exchangeName;
    private $room;
    private $messageFormat;
    private $apiVersion;
    private $channel;
    private $botName;
    private $useAttachment;
    private $useShortAttachment;
    private $includeExtra;
    private $iconEmoji;
    private $webhookUrl;
    private $team;
    private $notify;
    private $nickname;
    private $token;
    private $region;
    private $source;
    private $useSsl;
    private $user;
    private $title;
    private $host;
    private $port;
    private $publisher;
    private $mongo;
    private $elasticsearch;
    private $index;
    private $documentType;
    private $ignoreError;
    private $redis;
    private $predis;
    private $config;
    private $members;
    private $fromEmail;
    private $toEmail;
    private $subject;
    private $contentType;
    private $headers;
    private $mailer;
    private $emailPrototype;
    private $lazy;
    private $connectionString;
    private $timeout;
    private $time;
    private $deduplicationLevel;
    private $store;
    private $connectionTimeout;
    private $persistent;
    private $dsn;
    private $hubId;
    private $clientId;
    private $autoLogStacks;
    private $release;
    private $environment;
    private $messageType;
    private $tags;
    private $consoleFormaterOptions;
    private $consoleFormatterOptions;
    private $verbosityLevels;
    private $channels;
    private $formatter;
    private $nested;
    private $_usedProperties = [];
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function type($value): self
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function id($value): self
    {
        $this->_usedProperties['id'] = true;
        $this->id = $value;
    
        return $this;
    }
    
    /**
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function priority($value): self
    {
        $this->_usedProperties['priority'] = true;
        $this->priority = $value;
    
        return $this;
    }
    
    /**
     * @default 'DEBUG'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function level($value): self
    {
        $this->_usedProperties['level'] = true;
        $this->level = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function bubble($value): self
    {
        $this->_usedProperties['bubble'] = true;
        $this->bubble = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function appName($value): self
    {
        $this->_usedProperties['appName'] = true;
        $this->appName = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function includeStacktraces($value): self
    {
        $this->_usedProperties['includeStacktraces'] = true;
        $this->includeStacktraces = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function processPsr3Messages($value): self
    {
        $this->_usedProperties['processPsr3Messages'] = true;
        $this->processPsr3Messages = $value;
    
        return $this;
    }
    
    /**
     * @default '%kernel.logs_dir%/%kernel.environment%.log'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function path($value): self
    {
        $this->_usedProperties['path'] = true;
        $this->path = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filePermission($value): self
    {
        $this->_usedProperties['filePermission'] = true;
        $this->filePermission = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useLocking($value): self
    {
        $this->_usedProperties['useLocking'] = true;
        $this->useLocking = $value;
    
        return $this;
    }
    
    /**
     * @default '{filename}-{date}'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filenameFormat($value): self
    {
        $this->_usedProperties['filenameFormat'] = true;
        $this->filenameFormat = $value;
    
        return $this;
    }
    
    /**
     * @default 'Y-m-d'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dateFormat($value): self
    {
        $this->_usedProperties['dateFormat'] = true;
        $this->dateFormat = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function ident($value): self
    {
        $this->_usedProperties['ident'] = true;
        $this->ident = $value;
    
        return $this;
    }
    
    /**
     * @default 1
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function logopts($value): self
    {
        $this->_usedProperties['logopts'] = true;
        $this->logopts = $value;
    
        return $this;
    }
    
    /**
     * @default 'user'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function facility($value): self
    {
        $this->_usedProperties['facility'] = true;
        $this->facility = $value;
    
        return $this;
    }
    
    /**
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function maxFiles($value): self
    {
        $this->_usedProperties['maxFiles'] = true;
        $this->maxFiles = $value;
    
        return $this;
    }
    
    /**
     * @default 'WARNING'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function actionLevel($value): self
    {
        $this->_usedProperties['actionLevel'] = true;
        $this->actionLevel = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function activationStrategy($value): self
    {
        $this->_usedProperties['activationStrategy'] = true;
        $this->activationStrategy = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function stopBuffering($value): self
    {
        $this->_usedProperties['stopBuffering'] = true;
        $this->stopBuffering = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function passthruLevel($value): self
    {
        $this->_usedProperties['passthruLevel'] = true;
        $this->passthruLevel = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function excluded404s($value): self
    {
        $this->_usedProperties['excluded404s'] = true;
        $this->excluded404s = $value;
    
        return $this;
    }
    
    public function excludedHttpCode(array $value = []): \Symfony\Config\Monolog\HandlerConfig\ExcludedHttpCodeConfig
    {
        $this->_usedProperties['excludedHttpCodes'] = true;
    
        return $this->excludedHttpCodes[] = new \Symfony\Config\Monolog\HandlerConfig\ExcludedHttpCodeConfig($value);
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function acceptedLevels($value): self
    {
        $this->_usedProperties['acceptedLevels'] = true;
        $this->acceptedLevels = $value;
    
        return $this;
    }
    
    /**
     * @default 'DEBUG'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function minLevel($value): self
    {
        $this->_usedProperties['minLevel'] = true;
        $this->minLevel = $value;
    
        return $this;
    }
    
    /**
     * @default 'EMERGENCY'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function maxLevel($value): self
    {
        $this->_usedProperties['maxLevel'] = true;
        $this->maxLevel = $value;
    
        return $this;
    }
    
    /**
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function bufferSize($value): self
    {
        $this->_usedProperties['bufferSize'] = true;
        $this->bufferSize = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function flushOnOverflow($value): self
    {
        $this->_usedProperties['flushOnOverflow'] = true;
        $this->flushOnOverflow = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function handler($value): self
    {
        $this->_usedProperties['handler'] = true;
        $this->handler = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function url($value): self
    {
        $this->_usedProperties['url'] = true;
        $this->url = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function exchange($value): self
    {
        $this->_usedProperties['exchange'] = true;
        $this->exchange = $value;
    
        return $this;
    }
    
    /**
     * @default 'log'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function exchangeName($value): self
    {
        $this->_usedProperties['exchangeName'] = true;
        $this->exchangeName = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function room($value): self
    {
        $this->_usedProperties['room'] = true;
        $this->room = $value;
    
        return $this;
    }
    
    /**
     * @default 'text'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function messageFormat($value): self
    {
        $this->_usedProperties['messageFormat'] = true;
        $this->messageFormat = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function apiVersion($value): self
    {
        $this->_usedProperties['apiVersion'] = true;
        $this->apiVersion = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function channel($value): self
    {
        $this->_usedProperties['channel'] = true;
        $this->channel = $value;
    
        return $this;
    }
    
    /**
     * @default 'Monolog'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function botName($value): self
    {
        $this->_usedProperties['botName'] = true;
        $this->botName = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function useAttachment($value): self
    {
        $this->_usedProperties['useAttachment'] = true;
        $this->useAttachment = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function useShortAttachment($value): self
    {
        $this->_usedProperties['useShortAttachment'] = true;
        $this->useShortAttachment = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function includeExtra($value): self
    {
        $this->_usedProperties['includeExtra'] = true;
        $this->includeExtra = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function iconEmoji($value): self
    {
        $this->_usedProperties['iconEmoji'] = true;
        $this->iconEmoji = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function webhookUrl($value): self
    {
        $this->_usedProperties['webhookUrl'] = true;
        $this->webhookUrl = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function team($value): self
    {
        $this->_usedProperties['team'] = true;
        $this->team = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function notify($value): self
    {
        $this->_usedProperties['notify'] = true;
        $this->notify = $value;
    
        return $this;
    }
    
    /**
     * @default 'Monolog'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function nickname($value): self
    {
        $this->_usedProperties['nickname'] = true;
        $this->nickname = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function token($value): self
    {
        $this->_usedProperties['token'] = true;
        $this->token = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function region($value): self
    {
        $this->_usedProperties['region'] = true;
        $this->region = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function source($value): self
    {
        $this->_usedProperties['source'] = true;
        $this->source = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useSsl($value): self
    {
        $this->_usedProperties['useSsl'] = true;
        $this->useSsl = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function user($value): self
    {
        $this->_usedProperties['user'] = true;
        $this->user = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function title($value): self
    {
        $this->_usedProperties['title'] = true;
        $this->title = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function host($value): self
    {
        $this->_usedProperties['host'] = true;
        $this->host = $value;
    
        return $this;
    }
    
    /**
     * @default 514
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function port($value): self
    {
        $this->_usedProperties['port'] = true;
        $this->port = $value;
    
        return $this;
    }
    
    public function publisher(array $value = []): \Symfony\Config\Monolog\HandlerConfig\PublisherConfig
    {
        if (null === $this->publisher) {
            $this->_usedProperties['publisher'] = true;
            $this->publisher = new \Symfony\Config\Monolog\HandlerConfig\PublisherConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "publisher()" has already been initialized. You cannot pass values the second time you call publisher().');
        }
    
        return $this->publisher;
    }
    
    public function mongo(array $value = []): \Symfony\Config\Monolog\HandlerConfig\MongoConfig
    {
        if (null === $this->mongo) {
            $this->_usedProperties['mongo'] = true;
            $this->mongo = new \Symfony\Config\Monolog\HandlerConfig\MongoConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "mongo()" has already been initialized. You cannot pass values the second time you call mongo().');
        }
    
        return $this->mongo;
    }
    
    public function elasticsearch(array $value = []): \Symfony\Config\Monolog\HandlerConfig\ElasticsearchConfig
    {
        if (null === $this->elasticsearch) {
            $this->_usedProperties['elasticsearch'] = true;
            $this->elasticsearch = new \Symfony\Config\Monolog\HandlerConfig\ElasticsearchConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "elasticsearch()" has already been initialized. You cannot pass values the second time you call elasticsearch().');
        }
    
        return $this->elasticsearch;
    }
    
    /**
     * @default 'monolog'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function index($value): self
    {
        $this->_usedProperties['index'] = true;
        $this->index = $value;
    
        return $this;
    }
    
    /**
     * @default 'logs'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function documentType($value): self
    {
        $this->_usedProperties['documentType'] = true;
        $this->documentType = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function ignoreError($value): self
    {
        $this->_usedProperties['ignoreError'] = true;
        $this->ignoreError = $value;
    
        return $this;
    }
    
    public function redis(array $value = []): \Symfony\Config\Monolog\HandlerConfig\RedisConfig
    {
        if (null === $this->redis) {
            $this->_usedProperties['redis'] = true;
            $this->redis = new \Symfony\Config\Monolog\HandlerConfig\RedisConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "redis()" has already been initialized. You cannot pass values the second time you call redis().');
        }
    
        return $this->redis;
    }
    
    public function predis(array $value = []): \Symfony\Config\Monolog\HandlerConfig\PredisConfig
    {
        if (null === $this->predis) {
            $this->_usedProperties['predis'] = true;
            $this->predis = new \Symfony\Config\Monolog\HandlerConfig\PredisConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "predis()" has already been initialized. You cannot pass values the second time you call predis().');
        }
    
        return $this->predis;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function config($value): self
    {
        $this->_usedProperties['config'] = true;
        $this->config = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function members($value): self
    {
        $this->_usedProperties['members'] = true;
        $this->members = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fromEmail($value): self
    {
        $this->_usedProperties['fromEmail'] = true;
        $this->fromEmail = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function toEmail($value): self
    {
        $this->_usedProperties['toEmail'] = true;
        $this->toEmail = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function subject($value): self
    {
        $this->_usedProperties['subject'] = true;
        $this->subject = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function contentType($value): self
    {
        $this->_usedProperties['contentType'] = true;
        $this->contentType = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function headers($value): self
    {
        $this->_usedProperties['headers'] = true;
        $this->headers = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mailer($value): self
    {
        $this->_usedProperties['mailer'] = true;
        $this->mailer = $value;
    
        return $this;
    }
    
    public function emailPrototype(array $value = []): \Symfony\Config\Monolog\HandlerConfig\EmailPrototypeConfig
    {
        if (null === $this->emailPrototype) {
            $this->_usedProperties['emailPrototype'] = true;
            $this->emailPrototype = new \Symfony\Config\Monolog\HandlerConfig\EmailPrototypeConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "emailPrototype()" has already been initialized. You cannot pass values the second time you call emailPrototype().');
        }
    
        return $this->emailPrototype;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function lazy($value): self
    {
        $this->_usedProperties['lazy'] = true;
        $this->lazy = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function connectionString($value): self
    {
        $this->_usedProperties['connectionString'] = true;
        $this->connectionString = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function timeout($value): self
    {
        $this->_usedProperties['timeout'] = true;
        $this->timeout = $value;
    
        return $this;
    }
    
    /**
     * @default 60
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function time($value): self
    {
        $this->_usedProperties['time'] = true;
        $this->time = $value;
    
        return $this;
    }
    
    /**
     * @default 400
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function deduplicationLevel($value): self
    {
        $this->_usedProperties['deduplicationLevel'] = true;
        $this->deduplicationLevel = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function store($value): self
    {
        $this->_usedProperties['store'] = true;
        $this->store = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function connectionTimeout($value): self
    {
        $this->_usedProperties['connectionTimeout'] = true;
        $this->connectionTimeout = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function persistent($value): self
    {
        $this->_usedProperties['persistent'] = true;
        $this->persistent = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dsn($value): self
    {
        $this->_usedProperties['dsn'] = true;
        $this->dsn = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function hubId($value): self
    {
        $this->_usedProperties['hubId'] = true;
        $this->hubId = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function clientId($value): self
    {
        $this->_usedProperties['clientId'] = true;
        $this->clientId = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function autoLogStacks($value): self
    {
        $this->_usedProperties['autoLogStacks'] = true;
        $this->autoLogStacks = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function release($value): self
    {
        $this->_usedProperties['release'] = true;
        $this->release = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function environment($value): self
    {
        $this->_usedProperties['environment'] = true;
        $this->environment = $value;
    
        return $this;
    }
    
    /**
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function messageType($value): self
    {
        $this->_usedProperties['messageType'] = true;
        $this->messageType = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function tags($value): self
    {
        $this->_usedProperties['tags'] = true;
        $this->tags = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @deprecated ".console_formater_options" is deprecated, use ".console_formatter_options" instead.
     * @return $this
     */
    public function consoleFormaterOptions($value): self
    {
        $this->_usedProperties['consoleFormaterOptions'] = true;
        $this->consoleFormaterOptions = $value;
    
        return $this;
    }
    
    /**
     * @default array (
    )
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function consoleFormatterOptions($value = array (
    )): self
    {
        $this->_usedProperties['consoleFormatterOptions'] = true;
        $this->consoleFormatterOptions = $value;
    
        return $this;
    }
    
    public function verbosityLevels(array $value = []): \Symfony\Config\Monolog\HandlerConfig\VerbosityLevelsConfig
    {
        if (null === $this->verbosityLevels) {
            $this->_usedProperties['verbosityLevels'] = true;
            $this->verbosityLevels = new \Symfony\Config\Monolog\HandlerConfig\VerbosityLevelsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "verbosityLevels()" has already been initialized. You cannot pass values the second time you call verbosityLevels().');
        }
    
        return $this->verbosityLevels;
    }
    
    public function channels(array $value = []): \Symfony\Config\Monolog\HandlerConfig\ChannelsConfig
    {
        if (null === $this->channels) {
            $this->_usedProperties['channels'] = true;
            $this->channels = new \Symfony\Config\Monolog\HandlerConfig\ChannelsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "channels()" has already been initialized. You cannot pass values the second time you call channels().');
        }
    
        return $this->channels;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function formatter($value): self
    {
        $this->_usedProperties['formatter'] = true;
        $this->formatter = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function nested($value): self
    {
        $this->_usedProperties['nested'] = true;
        $this->nested = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('type', $value)) {
            $this->_usedProperties['type'] = true;
            $this->type = $value['type'];
            unset($value['type']);
        }
    
        if (array_key_exists('id', $value)) {
            $this->_usedProperties['id'] = true;
            $this->id = $value['id'];
            unset($value['id']);
        }
    
        if (array_key_exists('priority', $value)) {
            $this->_usedProperties['priority'] = true;
            $this->priority = $value['priority'];
            unset($value['priority']);
        }
    
        if (array_key_exists('level', $value)) {
            $this->_usedProperties['level'] = true;
            $this->level = $value['level'];
            unset($value['level']);
        }
    
        if (array_key_exists('bubble', $value)) {
            $this->_usedProperties['bubble'] = true;
            $this->bubble = $value['bubble'];
            unset($value['bubble']);
        }
    
        if (array_key_exists('app_name', $value)) {
            $this->_usedProperties['appName'] = true;
            $this->appName = $value['app_name'];
            unset($value['app_name']);
        }
    
        if (array_key_exists('include_stacktraces', $value)) {
            $this->_usedProperties['includeStacktraces'] = true;
            $this->includeStacktraces = $value['include_stacktraces'];
            unset($value['include_stacktraces']);
        }
    
        if (array_key_exists('process_psr_3_messages', $value)) {
            $this->_usedProperties['processPsr3Messages'] = true;
            $this->processPsr3Messages = $value['process_psr_3_messages'];
            unset($value['process_psr_3_messages']);
        }
    
        if (array_key_exists('path', $value)) {
            $this->_usedProperties['path'] = true;
            $this->path = $value['path'];
            unset($value['path']);
        }
    
        if (array_key_exists('file_permission', $value)) {
            $this->_usedProperties['filePermission'] = true;
            $this->filePermission = $value['file_permission'];
            unset($value['file_permission']);
        }
    
        if (array_key_exists('use_locking', $value)) {
            $this->_usedProperties['useLocking'] = true;
            $this->useLocking = $value['use_locking'];
            unset($value['use_locking']);
        }
    
        if (array_key_exists('filename_format', $value)) {
            $this->_usedProperties['filenameFormat'] = true;
            $this->filenameFormat = $value['filename_format'];
            unset($value['filename_format']);
        }
    
        if (array_key_exists('date_format', $value)) {
            $this->_usedProperties['dateFormat'] = true;
            $this->dateFormat = $value['date_format'];
            unset($value['date_format']);
        }
    
        if (array_key_exists('ident', $value)) {
            $this->_usedProperties['ident'] = true;
            $this->ident = $value['ident'];
            unset($value['ident']);
        }
    
        if (array_key_exists('logopts', $value)) {
            $this->_usedProperties['logopts'] = true;
            $this->logopts = $value['logopts'];
            unset($value['logopts']);
        }
    
        if (array_key_exists('facility', $value)) {
            $this->_usedProperties['facility'] = true;
            $this->facility = $value['facility'];
            unset($value['facility']);
        }
    
        if (array_key_exists('max_files', $value)) {
            $this->_usedProperties['maxFiles'] = true;
            $this->maxFiles = $value['max_files'];
            unset($value['max_files']);
        }
    
        if (array_key_exists('action_level', $value)) {
            $this->_usedProperties['actionLevel'] = true;
            $this->actionLevel = $value['action_level'];
            unset($value['action_level']);
        }
    
        if (array_key_exists('activation_strategy', $value)) {
            $this->_usedProperties['activationStrategy'] = true;
            $this->activationStrategy = $value['activation_strategy'];
            unset($value['activation_strategy']);
        }
    
        if (array_key_exists('stop_buffering', $value)) {
            $this->_usedProperties['stopBuffering'] = true;
            $this->stopBuffering = $value['stop_buffering'];
            unset($value['stop_buffering']);
        }
    
        if (array_key_exists('passthru_level', $value)) {
            $this->_usedProperties['passthruLevel'] = true;
            $this->passthruLevel = $value['passthru_level'];
            unset($value['passthru_level']);
        }
    
        if (array_key_exists('excluded_404s', $value)) {
            $this->_usedProperties['excluded404s'] = true;
            $this->excluded404s = $value['excluded_404s'];
            unset($value['excluded_404s']);
        }
    
        if (array_key_exists('excluded_http_codes', $value)) {
            $this->_usedProperties['excludedHttpCodes'] = true;
            $this->excludedHttpCodes = array_map(function ($v) { return new \Symfony\Config\Monolog\HandlerConfig\ExcludedHttpCodeConfig($v); }, $value['excluded_http_codes']);
            unset($value['excluded_http_codes']);
        }
    
        if (array_key_exists('accepted_levels', $value)) {
            $this->_usedProperties['acceptedLevels'] = true;
            $this->acceptedLevels = $value['accepted_levels'];
            unset($value['accepted_levels']);
        }
    
        if (array_key_exists('min_level', $value)) {
            $this->_usedProperties['minLevel'] = true;
            $this->minLevel = $value['min_level'];
            unset($value['min_level']);
        }
    
        if (array_key_exists('max_level', $value)) {
            $this->_usedProperties['maxLevel'] = true;
            $this->maxLevel = $value['max_level'];
            unset($value['max_level']);
        }
    
        if (array_key_exists('buffer_size', $value)) {
            $this->_usedProperties['bufferSize'] = true;
            $this->bufferSize = $value['buffer_size'];
            unset($value['buffer_size']);
        }
    
        if (array_key_exists('flush_on_overflow', $value)) {
            $this->_usedProperties['flushOnOverflow'] = true;
            $this->flushOnOverflow = $value['flush_on_overflow'];
            unset($value['flush_on_overflow']);
        }
    
        if (array_key_exists('handler', $value)) {
            $this->_usedProperties['handler'] = true;
            $this->handler = $value['handler'];
            unset($value['handler']);
        }
    
        if (array_key_exists('url', $value)) {
            $this->_usedProperties['url'] = true;
            $this->url = $value['url'];
            unset($value['url']);
        }
    
        if (array_key_exists('exchange', $value)) {
            $this->_usedProperties['exchange'] = true;
            $this->exchange = $value['exchange'];
            unset($value['exchange']);
        }
    
        if (array_key_exists('exchange_name', $value)) {
            $this->_usedProperties['exchangeName'] = true;
            $this->exchangeName = $value['exchange_name'];
            unset($value['exchange_name']);
        }
    
        if (array_key_exists('room', $value)) {
            $this->_usedProperties['room'] = true;
            $this->room = $value['room'];
            unset($value['room']);
        }
    
        if (array_key_exists('message_format', $value)) {
            $this->_usedProperties['messageFormat'] = true;
            $this->messageFormat = $value['message_format'];
            unset($value['message_format']);
        }
    
        if (array_key_exists('api_version', $value)) {
            $this->_usedProperties['apiVersion'] = true;
            $this->apiVersion = $value['api_version'];
            unset($value['api_version']);
        }
    
        if (array_key_exists('channel', $value)) {
            $this->_usedProperties['channel'] = true;
            $this->channel = $value['channel'];
            unset($value['channel']);
        }
    
        if (array_key_exists('bot_name', $value)) {
            $this->_usedProperties['botName'] = true;
            $this->botName = $value['bot_name'];
            unset($value['bot_name']);
        }
    
        if (array_key_exists('use_attachment', $value)) {
            $this->_usedProperties['useAttachment'] = true;
            $this->useAttachment = $value['use_attachment'];
            unset($value['use_attachment']);
        }
    
        if (array_key_exists('use_short_attachment', $value)) {
            $this->_usedProperties['useShortAttachment'] = true;
            $this->useShortAttachment = $value['use_short_attachment'];
            unset($value['use_short_attachment']);
        }
    
        if (array_key_exists('include_extra', $value)) {
            $this->_usedProperties['includeExtra'] = true;
            $this->includeExtra = $value['include_extra'];
            unset($value['include_extra']);
        }
    
        if (array_key_exists('icon_emoji', $value)) {
            $this->_usedProperties['iconEmoji'] = true;
            $this->iconEmoji = $value['icon_emoji'];
            unset($value['icon_emoji']);
        }
    
        if (array_key_exists('webhook_url', $value)) {
            $this->_usedProperties['webhookUrl'] = true;
            $this->webhookUrl = $value['webhook_url'];
            unset($value['webhook_url']);
        }
    
        if (array_key_exists('team', $value)) {
            $this->_usedProperties['team'] = true;
            $this->team = $value['team'];
            unset($value['team']);
        }
    
        if (array_key_exists('notify', $value)) {
            $this->_usedProperties['notify'] = true;
            $this->notify = $value['notify'];
            unset($value['notify']);
        }
    
        if (array_key_exists('nickname', $value)) {
            $this->_usedProperties['nickname'] = true;
            $this->nickname = $value['nickname'];
            unset($value['nickname']);
        }
    
        if (array_key_exists('token', $value)) {
            $this->_usedProperties['token'] = true;
            $this->token = $value['token'];
            unset($value['token']);
        }
    
        if (array_key_exists('region', $value)) {
            $this->_usedProperties['region'] = true;
            $this->region = $value['region'];
            unset($value['region']);
        }
    
        if (array_key_exists('source', $value)) {
            $this->_usedProperties['source'] = true;
            $this->source = $value['source'];
            unset($value['source']);
        }
    
        if (array_key_exists('use_ssl', $value)) {
            $this->_usedProperties['useSsl'] = true;
            $this->useSsl = $value['use_ssl'];
            unset($value['use_ssl']);
        }
    
        if (array_key_exists('user', $value)) {
            $this->_usedProperties['user'] = true;
            $this->user = $value['user'];
            unset($value['user']);
        }
    
        if (array_key_exists('title', $value)) {
            $this->_usedProperties['title'] = true;
            $this->title = $value['title'];
            unset($value['title']);
        }
    
        if (array_key_exists('host', $value)) {
            $this->_usedProperties['host'] = true;
            $this->host = $value['host'];
            unset($value['host']);
        }
    
        if (array_key_exists('port', $value)) {
            $this->_usedProperties['port'] = true;
            $this->port = $value['port'];
            unset($value['port']);
        }
    
        if (array_key_exists('publisher', $value)) {
            $this->_usedProperties['publisher'] = true;
            $this->publisher = new \Symfony\Config\Monolog\HandlerConfig\PublisherConfig($value['publisher']);
            unset($value['publisher']);
        }
    
        if (array_key_exists('mongo', $value)) {
            $this->_usedProperties['mongo'] = true;
            $this->mongo = new \Symfony\Config\Monolog\HandlerConfig\MongoConfig($value['mongo']);
            unset($value['mongo']);
        }
    
        if (array_key_exists('elasticsearch', $value)) {
            $this->_usedProperties['elasticsearch'] = true;
            $this->elasticsearch = new \Symfony\Config\Monolog\HandlerConfig\ElasticsearchConfig($value['elasticsearch']);
            unset($value['elasticsearch']);
        }
    
        if (array_key_exists('index', $value)) {
            $this->_usedProperties['index'] = true;
            $this->index = $value['index'];
            unset($value['index']);
        }
    
        if (array_key_exists('document_type', $value)) {
            $this->_usedProperties['documentType'] = true;
            $this->documentType = $value['document_type'];
            unset($value['document_type']);
        }
    
        if (array_key_exists('ignore_error', $value)) {
            $this->_usedProperties['ignoreError'] = true;
            $this->ignoreError = $value['ignore_error'];
            unset($value['ignore_error']);
        }
    
        if (array_key_exists('redis', $value)) {
            $this->_usedProperties['redis'] = true;
            $this->redis = new \Symfony\Config\Monolog\HandlerConfig\RedisConfig($value['redis']);
            unset($value['redis']);
        }
    
        if (array_key_exists('predis', $value)) {
            $this->_usedProperties['predis'] = true;
            $this->predis = new \Symfony\Config\Monolog\HandlerConfig\PredisConfig($value['predis']);
            unset($value['predis']);
        }
    
        if (array_key_exists('config', $value)) {
            $this->_usedProperties['config'] = true;
            $this->config = $value['config'];
            unset($value['config']);
        }
    
        if (array_key_exists('members', $value)) {
            $this->_usedProperties['members'] = true;
            $this->members = $value['members'];
            unset($value['members']);
        }
    
        if (array_key_exists('from_email', $value)) {
            $this->_usedProperties['fromEmail'] = true;
            $this->fromEmail = $value['from_email'];
            unset($value['from_email']);
        }
    
        if (array_key_exists('to_email', $value)) {
            $this->_usedProperties['toEmail'] = true;
            $this->toEmail = $value['to_email'];
            unset($value['to_email']);
        }
    
        if (array_key_exists('subject', $value)) {
            $this->_usedProperties['subject'] = true;
            $this->subject = $value['subject'];
            unset($value['subject']);
        }
    
        if (array_key_exists('content_type', $value)) {
            $this->_usedProperties['contentType'] = true;
            $this->contentType = $value['content_type'];
            unset($value['content_type']);
        }
    
        if (array_key_exists('headers', $value)) {
            $this->_usedProperties['headers'] = true;
            $this->headers = $value['headers'];
            unset($value['headers']);
        }
    
        if (array_key_exists('mailer', $value)) {
            $this->_usedProperties['mailer'] = true;
            $this->mailer = $value['mailer'];
            unset($value['mailer']);
        }
    
        if (array_key_exists('email_prototype', $value)) {
            $this->_usedProperties['emailPrototype'] = true;
            $this->emailPrototype = new \Symfony\Config\Monolog\HandlerConfig\EmailPrototypeConfig($value['email_prototype']);
            unset($value['email_prototype']);
        }
    
        if (array_key_exists('lazy', $value)) {
            $this->_usedProperties['lazy'] = true;
            $this->lazy = $value['lazy'];
            unset($value['lazy']);
        }
    
        if (array_key_exists('connection_string', $value)) {
            $this->_usedProperties['connectionString'] = true;
            $this->connectionString = $value['connection_string'];
            unset($value['connection_string']);
        }
    
        if (array_key_exists('timeout', $value)) {
            $this->_usedProperties['timeout'] = true;
            $this->timeout = $value['timeout'];
            unset($value['timeout']);
        }
    
        if (array_key_exists('time', $value)) {
            $this->_usedProperties['time'] = true;
            $this->time = $value['time'];
            unset($value['time']);
        }
    
        if (array_key_exists('deduplication_level', $value)) {
            $this->_usedProperties['deduplicationLevel'] = true;
            $this->deduplicationLevel = $value['deduplication_level'];
            unset($value['deduplication_level']);
        }
    
        if (array_key_exists('store', $value)) {
            $this->_usedProperties['store'] = true;
            $this->store = $value['store'];
            unset($value['store']);
        }
    
        if (array_key_exists('connection_timeout', $value)) {
            $this->_usedProperties['connectionTimeout'] = true;
            $this->connectionTimeout = $value['connection_timeout'];
            unset($value['connection_timeout']);
        }
    
        if (array_key_exists('persistent', $value)) {
            $this->_usedProperties['persistent'] = true;
            $this->persistent = $value['persistent'];
            unset($value['persistent']);
        }
    
        if (array_key_exists('dsn', $value)) {
            $this->_usedProperties['dsn'] = true;
            $this->dsn = $value['dsn'];
            unset($value['dsn']);
        }
    
        if (array_key_exists('hub_id', $value)) {
            $this->_usedProperties['hubId'] = true;
            $this->hubId = $value['hub_id'];
            unset($value['hub_id']);
        }
    
        if (array_key_exists('client_id', $value)) {
            $this->_usedProperties['clientId'] = true;
            $this->clientId = $value['client_id'];
            unset($value['client_id']);
        }
    
        if (array_key_exists('auto_log_stacks', $value)) {
            $this->_usedProperties['autoLogStacks'] = true;
            $this->autoLogStacks = $value['auto_log_stacks'];
            unset($value['auto_log_stacks']);
        }
    
        if (array_key_exists('release', $value)) {
            $this->_usedProperties['release'] = true;
            $this->release = $value['release'];
            unset($value['release']);
        }
    
        if (array_key_exists('environment', $value)) {
            $this->_usedProperties['environment'] = true;
            $this->environment = $value['environment'];
            unset($value['environment']);
        }
    
        if (array_key_exists('message_type', $value)) {
            $this->_usedProperties['messageType'] = true;
            $this->messageType = $value['message_type'];
            unset($value['message_type']);
        }
    
        if (array_key_exists('tags', $value)) {
            $this->_usedProperties['tags'] = true;
            $this->tags = $value['tags'];
            unset($value['tags']);
        }
    
        if (array_key_exists('console_formater_options', $value)) {
            $this->_usedProperties['consoleFormaterOptions'] = true;
            $this->consoleFormaterOptions = $value['console_formater_options'];
            unset($value['console_formater_options']);
        }
    
        if (array_key_exists('console_formatter_options', $value)) {
            $this->_usedProperties['consoleFormatterOptions'] = true;
            $this->consoleFormatterOptions = $value['console_formatter_options'];
            unset($value['console_formatter_options']);
        }
    
        if (array_key_exists('verbosity_levels', $value)) {
            $this->_usedProperties['verbosityLevels'] = true;
            $this->verbosityLevels = new \Symfony\Config\Monolog\HandlerConfig\VerbosityLevelsConfig($value['verbosity_levels']);
            unset($value['verbosity_levels']);
        }
    
        if (array_key_exists('channels', $value)) {
            $this->_usedProperties['channels'] = true;
            $this->channels = new \Symfony\Config\Monolog\HandlerConfig\ChannelsConfig($value['channels']);
            unset($value['channels']);
        }
    
        if (array_key_exists('formatter', $value)) {
            $this->_usedProperties['formatter'] = true;
            $this->formatter = $value['formatter'];
            unset($value['formatter']);
        }
    
        if (array_key_exists('nested', $value)) {
            $this->_usedProperties['nested'] = true;
            $this->nested = $value['nested'];
            unset($value['nested']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['id'])) {
            $output['id'] = $this->id;
        }
        if (isset($this->_usedProperties['priority'])) {
            $output['priority'] = $this->priority;
        }
        if (isset($this->_usedProperties['level'])) {
            $output['level'] = $this->level;
        }
        if (isset($this->_usedProperties['bubble'])) {
            $output['bubble'] = $this->bubble;
        }
        if (isset($this->_usedProperties['appName'])) {
            $output['app_name'] = $this->appName;
        }
        if (isset($this->_usedProperties['includeStacktraces'])) {
            $output['include_stacktraces'] = $this->includeStacktraces;
        }
        if (isset($this->_usedProperties['processPsr3Messages'])) {
            $output['process_psr_3_messages'] = $this->processPsr3Messages;
        }
        if (isset($this->_usedProperties['path'])) {
            $output['path'] = $this->path;
        }
        if (isset($this->_usedProperties['filePermission'])) {
            $output['file_permission'] = $this->filePermission;
        }
        if (isset($this->_usedProperties['useLocking'])) {
            $output['use_locking'] = $this->useLocking;
        }
        if (isset($this->_usedProperties['filenameFormat'])) {
            $output['filename_format'] = $this->filenameFormat;
        }
        if (isset($this->_usedProperties['dateFormat'])) {
            $output['date_format'] = $this->dateFormat;
        }
        if (isset($this->_usedProperties['ident'])) {
            $output['ident'] = $this->ident;
        }
        if (isset($this->_usedProperties['logopts'])) {
            $output['logopts'] = $this->logopts;
        }
        if (isset($this->_usedProperties['facility'])) {
            $output['facility'] = $this->facility;
        }
        if (isset($this->_usedProperties['maxFiles'])) {
            $output['max_files'] = $this->maxFiles;
        }
        if (isset($this->_usedProperties['actionLevel'])) {
            $output['action_level'] = $this->actionLevel;
        }
        if (isset($this->_usedProperties['activationStrategy'])) {
            $output['activation_strategy'] = $this->activationStrategy;
        }
        if (isset($this->_usedProperties['stopBuffering'])) {
            $output['stop_buffering'] = $this->stopBuffering;
        }
        if (isset($this->_usedProperties['passthruLevel'])) {
            $output['passthru_level'] = $this->passthruLevel;
        }
        if (isset($this->_usedProperties['excluded404s'])) {
            $output['excluded_404s'] = $this->excluded404s;
        }
        if (isset($this->_usedProperties['excludedHttpCodes'])) {
            $output['excluded_http_codes'] = array_map(function ($v) { return $v->toArray(); }, $this->excludedHttpCodes);
        }
        if (isset($this->_usedProperties['acceptedLevels'])) {
            $output['accepted_levels'] = $this->acceptedLevels;
        }
        if (isset($this->_usedProperties['minLevel'])) {
            $output['min_level'] = $this->minLevel;
        }
        if (isset($this->_usedProperties['maxLevel'])) {
            $output['max_level'] = $this->maxLevel;
        }
        if (isset($this->_usedProperties['bufferSize'])) {
            $output['buffer_size'] = $this->bufferSize;
        }
        if (isset($this->_usedProperties['flushOnOverflow'])) {
            $output['flush_on_overflow'] = $this->flushOnOverflow;
        }
        if (isset($this->_usedProperties['handler'])) {
            $output['handler'] = $this->handler;
        }
        if (isset($this->_usedProperties['url'])) {
            $output['url'] = $this->url;
        }
        if (isset($this->_usedProperties['exchange'])) {
            $output['exchange'] = $this->exchange;
        }
        if (isset($this->_usedProperties['exchangeName'])) {
            $output['exchange_name'] = $this->exchangeName;
        }
        if (isset($this->_usedProperties['room'])) {
            $output['room'] = $this->room;
        }
        if (isset($this->_usedProperties['messageFormat'])) {
            $output['message_format'] = $this->messageFormat;
        }
        if (isset($this->_usedProperties['apiVersion'])) {
            $output['api_version'] = $this->apiVersion;
        }
        if (isset($this->_usedProperties['channel'])) {
            $output['channel'] = $this->channel;
        }
        if (isset($this->_usedProperties['botName'])) {
            $output['bot_name'] = $this->botName;
        }
        if (isset($this->_usedProperties['useAttachment'])) {
            $output['use_attachment'] = $this->useAttachment;
        }
        if (isset($this->_usedProperties['useShortAttachment'])) {
            $output['use_short_attachment'] = $this->useShortAttachment;
        }
        if (isset($this->_usedProperties['includeExtra'])) {
            $output['include_extra'] = $this->includeExtra;
        }
        if (isset($this->_usedProperties['iconEmoji'])) {
            $output['icon_emoji'] = $this->iconEmoji;
        }
        if (isset($this->_usedProperties['webhookUrl'])) {
            $output['webhook_url'] = $this->webhookUrl;
        }
        if (isset($this->_usedProperties['team'])) {
            $output['team'] = $this->team;
        }
        if (isset($this->_usedProperties['notify'])) {
            $output['notify'] = $this->notify;
        }
        if (isset($this->_usedProperties['nickname'])) {
            $output['nickname'] = $this->nickname;
        }
        if (isset($this->_usedProperties['token'])) {
            $output['token'] = $this->token;
        }
        if (isset($this->_usedProperties['region'])) {
            $output['region'] = $this->region;
        }
        if (isset($this->_usedProperties['source'])) {
            $output['source'] = $this->source;
        }
        if (isset($this->_usedProperties['useSsl'])) {
            $output['use_ssl'] = $this->useSsl;
        }
        if (isset($this->_usedProperties['user'])) {
            $output['user'] = $this->user;
        }
        if (isset($this->_usedProperties['title'])) {
            $output['title'] = $this->title;
        }
        if (isset($this->_usedProperties['host'])) {
            $output['host'] = $this->host;
        }
        if (isset($this->_usedProperties['port'])) {
            $output['port'] = $this->port;
        }
        if (isset($this->_usedProperties['publisher'])) {
            $output['publisher'] = $this->publisher->toArray();
        }
        if (isset($this->_usedProperties['mongo'])) {
            $output['mongo'] = $this->mongo->toArray();
        }
        if (isset($this->_usedProperties['elasticsearch'])) {
            $output['elasticsearch'] = $this->elasticsearch->toArray();
        }
        if (isset($this->_usedProperties['index'])) {
            $output['index'] = $this->index;
        }
        if (isset($this->_usedProperties['documentType'])) {
            $output['document_type'] = $this->documentType;
        }
        if (isset($this->_usedProperties['ignoreError'])) {
            $output['ignore_error'] = $this->ignoreError;
        }
        if (isset($this->_usedProperties['redis'])) {
            $output['redis'] = $this->redis->toArray();
        }
        if (isset($this->_usedProperties['predis'])) {
            $output['predis'] = $this->predis->toArray();
        }
        if (isset($this->_usedProperties['config'])) {
            $output['config'] = $this->config;
        }
        if (isset($this->_usedProperties['members'])) {
            $output['members'] = $this->members;
        }
        if (isset($this->_usedProperties['fromEmail'])) {
            $output['from_email'] = $this->fromEmail;
        }
        if (isset($this->_usedProperties['toEmail'])) {
            $output['to_email'] = $this->toEmail;
        }
        if (isset($this->_usedProperties['subject'])) {
            $output['subject'] = $this->subject;
        }
        if (isset($this->_usedProperties['contentType'])) {
            $output['content_type'] = $this->contentType;
        }
        if (isset($this->_usedProperties['headers'])) {
            $output['headers'] = $this->headers;
        }
        if (isset($this->_usedProperties['mailer'])) {
            $output['mailer'] = $this->mailer;
        }
        if (isset($this->_usedProperties['emailPrototype'])) {
            $output['email_prototype'] = $this->emailPrototype->toArray();
        }
        if (isset($this->_usedProperties['lazy'])) {
            $output['lazy'] = $this->lazy;
        }
        if (isset($this->_usedProperties['connectionString'])) {
            $output['connection_string'] = $this->connectionString;
        }
        if (isset($this->_usedProperties['timeout'])) {
            $output['timeout'] = $this->timeout;
        }
        if (isset($this->_usedProperties['time'])) {
            $output['time'] = $this->time;
        }
        if (isset($this->_usedProperties['deduplicationLevel'])) {
            $output['deduplication_level'] = $this->deduplicationLevel;
        }
        if (isset($this->_usedProperties['store'])) {
            $output['store'] = $this->store;
        }
        if (isset($this->_usedProperties['connectionTimeout'])) {
            $output['connection_timeout'] = $this->connectionTimeout;
        }
        if (isset($this->_usedProperties['persistent'])) {
            $output['persistent'] = $this->persistent;
        }
        if (isset($this->_usedProperties['dsn'])) {
            $output['dsn'] = $this->dsn;
        }
        if (isset($this->_usedProperties['hubId'])) {
            $output['hub_id'] = $this->hubId;
        }
        if (isset($this->_usedProperties['clientId'])) {
            $output['client_id'] = $this->clientId;
        }
        if (isset($this->_usedProperties['autoLogStacks'])) {
            $output['auto_log_stacks'] = $this->autoLogStacks;
        }
        if (isset($this->_usedProperties['release'])) {
            $output['release'] = $this->release;
        }
        if (isset($this->_usedProperties['environment'])) {
            $output['environment'] = $this->environment;
        }
        if (isset($this->_usedProperties['messageType'])) {
            $output['message_type'] = $this->messageType;
        }
        if (isset($this->_usedProperties['tags'])) {
            $output['tags'] = $this->tags;
        }
        if (isset($this->_usedProperties['consoleFormaterOptions'])) {
            $output['console_formater_options'] = $this->consoleFormaterOptions;
        }
        if (isset($this->_usedProperties['consoleFormatterOptions'])) {
            $output['console_formatter_options'] = $this->consoleFormatterOptions;
        }
        if (isset($this->_usedProperties['verbosityLevels'])) {
            $output['verbosity_levels'] = $this->verbosityLevels->toArray();
        }
        if (isset($this->_usedProperties['channels'])) {
            $output['channels'] = $this->channels->toArray();
        }
        if (isset($this->_usedProperties['formatter'])) {
            $output['formatter'] = $this->formatter;
        }
        if (isset($this->_usedProperties['nested'])) {
            $output['nested'] = $this->nested;
        }
    
        return $output;
    }

}
