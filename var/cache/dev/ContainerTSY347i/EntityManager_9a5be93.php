<?php

namespace ContainerTSY347i;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc7576 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer06a6b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4abf2 = [
        
    ];

    public function getConnection()
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'getConnection', array(), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'getMetadataFactory', array(), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'getExpressionBuilder', array(), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'beginTransaction', array(), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'getCache', array(), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->getCache();
    }

    public function transactional($func)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'transactional', array('func' => $func), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'wrapInTransaction', array('func' => $func), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'commit', array(), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->commit();
    }

    public function rollback()
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'rollback', array(), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'getClassMetadata', array('className' => $className), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'createQuery', array('dql' => $dql), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'createNamedQuery', array('name' => $name), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'createQueryBuilder', array(), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'flush', array('entity' => $entity), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'clear', array('entityName' => $entityName), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->clear($entityName);
    }

    public function close()
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'close', array(), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->close();
    }

    public function persist($entity)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'persist', array('entity' => $entity), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'remove', array('entity' => $entity), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'refresh', array('entity' => $entity), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'detach', array('entity' => $entity), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'merge', array('entity' => $entity), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'getRepository', array('entityName' => $entityName), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'contains', array('entity' => $entity), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'getEventManager', array(), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'getConfiguration', array(), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'isOpen', array(), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'getUnitOfWork', array(), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'getProxyFactory', array(), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'initializeObject', array('obj' => $obj), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'getFilters', array(), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'isFiltersStateClean', array(), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'hasFilters', array(), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return $this->valueHolderc7576->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer06a6b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc7576) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc7576 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc7576->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, '__get', ['name' => $name], $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        if (isset(self::$publicProperties4abf2[$name])) {
            return $this->valueHolderc7576->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7576;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc7576;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7576;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc7576;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, '__isset', array('name' => $name), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7576;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc7576;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, '__unset', array('name' => $name), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7576;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc7576;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, '__clone', array(), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        $this->valueHolderc7576 = clone $this->valueHolderc7576;
    }

    public function __sleep()
    {
        $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, '__sleep', array(), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;

        return array('valueHolderc7576');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer06a6b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer06a6b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer06a6b && ($this->initializer06a6b->__invoke($valueHolderc7576, $this, 'initializeProxy', array(), $this->initializer06a6b) || 1) && $this->valueHolderc7576 = $valueHolderc7576;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc7576;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc7576;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
