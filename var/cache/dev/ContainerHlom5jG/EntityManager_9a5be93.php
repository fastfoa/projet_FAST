<?php

namespace ContainerHlom5jG;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder530b2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf357f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd748a = [
        
    ];

    public function getConnection()
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'getConnection', array(), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'getMetadataFactory', array(), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'getExpressionBuilder', array(), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'beginTransaction', array(), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'getCache', array(), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'transactional', array('func' => $func), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'commit', array(), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->commit();
    }

    public function rollback()
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'rollback', array(), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'getClassMetadata', array('className' => $className), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'createQuery', array('dql' => $dql), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'createNamedQuery', array('name' => $name), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'createQueryBuilder', array(), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'flush', array('entity' => $entity), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'clear', array('entityName' => $entityName), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->clear($entityName);
    }

    public function close()
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'close', array(), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->close();
    }

    public function persist($entity)
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'persist', array('entity' => $entity), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'remove', array('entity' => $entity), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'refresh', array('entity' => $entity), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'detach', array('entity' => $entity), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'merge', array('entity' => $entity), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'contains', array('entity' => $entity), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'getEventManager', array(), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'getConfiguration', array(), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'isOpen', array(), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'getUnitOfWork', array(), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'getProxyFactory', array(), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'initializeObject', array('obj' => $obj), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'getFilters', array(), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'isFiltersStateClean', array(), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'hasFilters', array(), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return $this->valueHolder530b2->hasFilters();
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

        $instance->initializerf357f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder530b2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder530b2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder530b2->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, '__get', ['name' => $name], $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        if (isset(self::$publicPropertiesd748a[$name])) {
            return $this->valueHolder530b2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder530b2;

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

        $targetObject = $this->valueHolder530b2;
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
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder530b2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder530b2;
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
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, '__isset', array('name' => $name), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder530b2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder530b2;
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
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, '__unset', array('name' => $name), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder530b2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder530b2;
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
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, '__clone', array(), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        $this->valueHolder530b2 = clone $this->valueHolder530b2;
    }

    public function __sleep()
    {
        $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, '__sleep', array(), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;

        return array('valueHolder530b2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf357f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf357f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf357f && ($this->initializerf357f->__invoke($valueHolder530b2, $this, 'initializeProxy', array(), $this->initializerf357f) || 1) && $this->valueHolder530b2 = $valueHolder530b2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder530b2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder530b2;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
