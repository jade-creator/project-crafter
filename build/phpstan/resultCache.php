<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1706874464,
	'meta' => array (
  'cacheVersion' => 'v10-collectedData',
  'phpstanVersion' => '1.10.56',
  'phpVersion' => 80301,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\ModelProperties\\ModelPropertyRule: {phpstan.rules.rule: %checkModelProperties%}, Larastan\\Larastan\\Rules\\ModelProperties\\ModelPropertyStaticCallRule: {phpstan.rules.rule: %checkModelProperties%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd, rd, dd], excludePaths: {analyseAndScan: [*.blade.php, /home/vagrant/code/project-crafter/database/migrations], analyse: []}, mixinExcludeClasses: [Eloquent], bootstrapFiles: [/home/vagrant/code/project-crafter/vendor/larastan/larastan/bootstrap.php], checkOctaneCompatibility: false, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], squashedMigrationsPath: [], databaseMigrationsPath: [database/settings], disableMigrationScan: false, disableSchemaScan: false, viewDirectories: [], checkModelProperties: true, checkPhpDocMissingReturn: false, checkUnusedViews: false, tmpDir: /home/vagrant/code/project-crafter/build/phpstan, paths: [/home/vagrant/code/project-crafter/app, /home/vagrant/code/project-crafter/database, /home/vagrant/code/project-crafter/domain], level: 8, checkGenericClassInNonGenericObjectType: false, checkMissingIterableValueType: false, checkAlwaysTrueInstanceof: true}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: [{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Types\\RelationDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelRelationsDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFindExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\BuilderModelFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionGenericStaticMethodDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionGenericStaticMethodDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\ModelProperties\\ModelPropertyRule}, {class: Larastan\\Larastan\\Rules\\ModelProperties\\ModelPropertyStaticCallRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\RelationParserHelper, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @currentPhpVersionSimpleDirectParser, reflectionProvider: @reflectionProvider}}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper}, {class: Larastan\\Larastan\\Rules\\ModelProperties\\ModelPropertiesRuleHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, Larastan\\Larastan\\Properties\\Schema\\PhpMyAdminDataTypeToPhpTypeConverter, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, Larastan\\Larastan\\ReturnTypes\\AppMakeHelper, Larastan\\Larastan\\Internal\\ConsoleApplicationResolver, Larastan\\Larastan\\Internal\\ConsoleApplicationHelper, Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper]}',
  'analysedPaths' => 
  array (
    0 => '/home/vagrant/code/project-crafter/app',
    1 => '/home/vagrant/code/project-crafter/database',
    2 => '/home/vagrant/code/project-crafter/domain',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    '/home/vagrant/code/project-crafter/composer.lock' => '0e79c1cc32e95083de7f7a900e4731d23543551e',
  ),
  'composerInstalled' => 
  array (
    '/home/vagrant/code/project-crafter/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'akaunting/laravel-money' => 
        array (
          'pretty_version' => '5.1.3',
          'version' => '5.1.3.0',
          'reference' => '3e3a4326b252c1a9ecaf0e43ff75e7262d6f28d5',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../akaunting/laravel-money',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'anourvalar/eloquent-serialize' => 
        array (
          'pretty_version' => '1.2.17',
          'version' => '1.2.17.0',
          'reference' => '1fcfdd5f41a0d2e7c8cf1d37e7227357bb827aef',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../anourvalar/eloquent-serialize',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'barryvdh/laravel-dompdf' => 
        array (
          'pretty_version' => 'v2.0.1',
          'version' => '2.0.1.0',
          'reference' => '9843d2be423670fb434f4c978b3c0f4dd92c87a6',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../barryvdh/laravel-dompdf',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'blade-ui-kit/blade-heroicons' => 
        array (
          'pretty_version' => '2.2.1',
          'version' => '2.2.1.0',
          'reference' => 'bcf4be8f6bbde0bb4c23f2e3fb189b88dec1580a',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../blade-ui-kit/blade-heroicons',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'blade-ui-kit/blade-icons' => 
        array (
          'pretty_version' => '1.5.3',
          'version' => '1.5.3.0',
          'reference' => 'b5e6603218e2347ac81cb780bc6f71c8c3b31f5b',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../blade-ui-kit/blade-icons',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'brianium/paratest' => 
        array (
          'pretty_version' => 'v7.3.1',
          'version' => '7.3.1.0',
          'reference' => '551f46f52a93177d873f3be08a1649ae886b4a30',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../brianium/paratest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.11.0',
          'version' => '0.11.0.0',
          'reference' => '0ad82ce168c82ba30d1c01ec86116ab52f589478',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '99f76ffa36cce3b70a4a6abce41dba15ca2e84cb',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'danharrin/date-format-converter' => 
        array (
          'pretty_version' => 'v0.3.0',
          'version' => '0.3.0.0',
          'reference' => '42b6ddc52059d4ba228a67c15adaaa0c039e75f2',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../danharrin/date-format-converter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'danharrin/livewire-rate-limiting' => 
        array (
          'pretty_version' => 'v1.3.0',
          'version' => '1.3.0.0',
          'reference' => 'bf16003f0d977b5a41071526d697eec94ac41735',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../danharrin/livewire-rate-limiting',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f41715465d65213d644d3141a6a93081be5d3549',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/cache' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '1ca8f21980e770095a31456042471a57bc4c68fb',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../doctrine/cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/dbal' => 
        array (
          'pretty_version' => '3.7.3',
          'version' => '3.7.3.0',
          'reference' => 'ce594cbc39a4866c544f1a970d285ff0548221ad',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../doctrine/dbal',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/deprecations' => 
        array (
          'pretty_version' => '1.1.3',
          'version' => '1.1.3.0',
          'reference' => 'dfbaa3c2d2e9a9df1118213f3b8b0c597bb99fab',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../doctrine/deprecations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/event-manager' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => '750671534e0241a7c50ea5b43f67e23eb5c96f32',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../doctrine/event-manager',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.0.9',
          'version' => '2.0.9.0',
          'reference' => '2930cd5ef353871c821d5c43ed030d39ac8cfe65',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '84a527db05647743d50373e0ec53a152f2cde568',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dompdf/dompdf' => 
        array (
          'pretty_version' => 'v2.0.4',
          'version' => '2.0.4.0',
          'reference' => '093f2d9739cec57428e39ddadedfd4f3ae862c0f',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../dompdf/dompdf',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.3.3',
          'version' => '3.3.3.0',
          'reference' => 'adfb1f505deb6384dc8b39804c5065dd3c8c8c0a',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.2',
          'version' => '4.0.2.0',
          'reference' => 'ebaaf5be6c0286928352e054f2d5125608e5405e',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.23.1',
          'version' => '1.23.1.0',
          'reference' => 'bfb4fe148adbf78eff521199619b93a52ae3554b',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fidry/cpu-core-counter' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => '85193c0b0cb5c47894b5eaec906e946f054e7077',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../fidry/cpu-core-counter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filament/actions' => 
        array (
          'pretty_version' => 'v3.2.10',
          'version' => '3.2.10.0',
          'reference' => '465ef83a1c43b3b7fe122dde50eda2ee0f9138ea',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../filament/actions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/filament' => 
        array (
          'pretty_version' => 'v3.2.10',
          'version' => '3.2.10.0',
          'reference' => 'cca8654535f53a6258616311f20649f2ea403e47',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../filament/filament',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/forms' => 
        array (
          'pretty_version' => 'v3.2.10',
          'version' => '3.2.10.0',
          'reference' => '580fd49eb62bbe22cf2123825da4ebd80fa1d7a6',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../filament/forms',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/infolists' => 
        array (
          'pretty_version' => 'v3.2.10',
          'version' => '3.2.10.0',
          'reference' => 'b071063c45f0cd314c863947d1d841da09d40750',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../filament/infolists',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/notifications' => 
        array (
          'pretty_version' => 'v3.2.10',
          'version' => '3.2.10.0',
          'reference' => 'c5f4f51d949fafc52643f2be654a4da92422836c',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../filament/notifications',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/spatie-laravel-media-library-plugin' => 
        array (
          'pretty_version' => 'v3.2.9',
          'version' => '3.2.9.0',
          'reference' => '6624dd542ce9f5f15df6aa4edb4bbf2979a627a0',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../filament/spatie-laravel-media-library-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/spatie-laravel-settings-plugin' => 
        array (
          'pretty_version' => 'v3.2.10',
          'version' => '3.2.10.0',
          'reference' => '755bc36459f4926d9effc2d3c64ee5f0a0ae509b',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../filament/spatie-laravel-settings-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/support' => 
        array (
          'pretty_version' => 'v3.2.10',
          'version' => '3.2.10.0',
          'reference' => '3b4d5d197c04e5a0b2a250d97c4761a07da9c85e',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../filament/support',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/tables' => 
        array (
          'pretty_version' => 'v3.2.10',
          'version' => '3.2.10.0',
          'reference' => '87c55f6a1107d6d70b61a83f2cd7495343fdb19c',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../filament/tables',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/widgets' => 
        array (
          'pretty_version' => 'v3.2.10',
          'version' => '3.2.10.0',
          'reference' => '9fae19f86f50b71b9d47c87305d742ee962af573',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../filament/widgets',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.15.4',
          'version' => '2.15.4.0',
          'reference' => 'a139776fa3f5985a50b509f2a02ff0f709d2a546',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'flowframe/laravel-trend' => 
        array (
          'pretty_version' => 'v0.1.5',
          'version' => '0.1.5.0',
          'reference' => 'bc43bf7840ff60aca39e856ad96f5e990fac83d7',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../flowframe/laravel-trend',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.3.0',
          'version' => '1.3.0.0',
          'reference' => '3d158f36e7875e2f040f37bc0573956240a5a38b',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.2',
          'version' => '1.1.2.0',
          'reference' => 'fbd48bce38f73f8a4ec8583362e732e4095e5862',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.8.1',
          'version' => '7.8.1.0',
          'reference' => '41042bc7ab002487b876a0683fc8dce04ddce104',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'bbff78d96034045e58e13dedd6ad91b5d1253223',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.6.2',
          'version' => '2.6.2.0',
          'reference' => '45b30f99ac27b5ca93cb4831afe16285f57b8221',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'ecea8feef63bd4fef1f037ecb288386999ecc11c',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.0.1',
          'version' => '2.0.1.0',
          'reference' => '8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.41.0',
          ),
        ),
        'jean85/pretty-package-versions' => 
        array (
          'pretty_version' => '2.0.5',
          'version' => '2.0.5.0',
          'reference' => 'ae547e455a3d8babd07b96966b17d7fd21d9c6af',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../jean85/pretty-package-versions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'kirschbaum-development/eloquent-power-joins' => 
        array (
          'pretty_version' => '3.4.0',
          'version' => '3.4.0.0',
          'reference' => '9238fcb53d777265ee9d8d139810e2cadecde079',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../kirschbaum-development/eloquent-power-joins',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'larastan/larastan' => 
        array (
          'pretty_version' => 'v2.8.1',
          'version' => '2.8.1.0',
          'reference' => 'b7cc6a29c457a7d4f3de90466392ae9ad3e17022',
          'type' => 'phpstan-extension',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../larastan/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v10.41.0',
          'version' => '10.41.0.0',
          'reference' => 'da31969bd35e6ee0bbcd9e876f88952dc754b012',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.13.9',
          'version' => '1.13.9.0',
          'reference' => 'e3e269cc5d874c8efd2dc7962b1c7ff2585fe525',
          'type' => 'project',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.1.15',
          'version' => '0.1.15.0',
          'reference' => 'd814a27514d99b03c85aa42b22cfd946568636c1',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/sail' => 
        array (
          'pretty_version' => 'v1.27.1',
          'version' => '1.27.1.0',
          'reference' => '9dc648978e4276f2bfd37a076a52e3bd9394777f',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../laravel/sail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/sanctum' => 
        array (
          'pretty_version' => 'v3.3.3',
          'version' => '3.3.3.0',
          'reference' => '8c104366459739f3ada0e994bcd3e6fd681ce3d5',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../laravel/sanctum',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v1.3.3',
          'version' => '1.3.3.0',
          'reference' => '3dbf8a8e914634c48d389c1234552666b3d43754',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v2.9.0',
          'version' => '2.9.0.0',
          'reference' => '502e0fe3f0415d06d5db1f83a472f0f3b754bafe',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laraveldaily/laravel-invoices' => 
        array (
          'pretty_version' => '3.3.1',
          'version' => '3.3.1.0',
          'reference' => 'c36b1cb20721a6b291e3a9562aa99c34aff1007b',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../laraveldaily/laravel-invoices',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.4.1',
          'version' => '2.4.1.0',
          'reference' => '3669d6d5f7a47a93c08ddff335e6d945481a1dd5',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/csv' => 
        array (
          'pretty_version' => '9.11.0',
          'version' => '9.11.0.0',
          'reference' => '33149c4bea4949aa4fa3d03fb11ed28682168b39',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../league/csv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.23.0',
          'version' => '3.23.0.0',
          'reference' => 'd4ad81e2b67396e33dc9d7e54ec74ccf73151dcc',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.23.0',
          'version' => '3.23.0.0',
          'reference' => '5cf046ba5f059460e86a997c504dd781a39a109b',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.14.0',
          'version' => '1.14.0.0',
          'reference' => 'b6a5854368533df0295c5761a0253656a2e52d9e',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.4.0',
          'version' => '7.4.0.0',
          'reference' => 'bf414ba956d902f5d98bf9385fcf63954f09dce5',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.4.0',
          'version' => '7.4.0.0',
          'reference' => 'bd8c487ec236930f7bbc42b8d374fa882fbba0f3',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'livewire/livewire' => 
        array (
          'pretty_version' => 'v3.3.5',
          'version' => '3.3.5.0',
          'reference' => '1ef880fbcdc7b6e5e405cc9135a62cd5fdbcd06a',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../livewire/livewire',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'maennchen/zipstream-php' => 
        array (
          'pretty_version' => '3.1.0',
          'version' => '3.1.0.0',
          'reference' => 'b8174494eda667f7d13876b4a7bfef0f62a7c0d1',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../maennchen/zipstream-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'masterminds/html5' => 
        array (
          'pretty_version' => '2.8.1',
          'version' => '2.8.1.0',
          'reference' => 'f47dcf3c70c584de14f21143c55d9939631bc6cf',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../masterminds/html5',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.7',
          'version' => '1.6.7.0',
          'reference' => '0cc058854b3195ba21dc6b1f7b1f60f4ef3a9c06',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'mokhosh/filament-kanban' => 
        array (
          'pretty_version' => 'v1.10.0',
          'version' => '1.10.0.0',
          'reference' => '47dd6c9a8d837fae26f4ce8f8a47af3a16ab1b41',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../mokhosh/filament-kanban',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.5.0',
          'version' => '3.5.0.0',
          'reference' => 'c915e2634718dbc8a4a15c61b0e62e7a44e14448',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.11.1',
          'version' => '1.11.1.0',
          'reference' => '7284c22080590fb39f2ffa3e9057f10a4ddd0e0c',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '2.72.1',
          'version' => '2.72.1.0',
          'reference' => '2b3b3db0a2d0556a177392ff1a3bf5608fa09f78',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.0',
          'version' => '1.3.0.0',
          'reference' => 'a6d3a6d1f545f01ef38e60f375d1cf1f4de98188',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd3ad0aa3b9f934602cb3e3902ebccf10be34d218',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.0.0',
          'version' => '5.0.0.0',
          'reference' => '4a21235f7e56e713259a6f76bf4b5ea08502b9dc',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v7.10.0',
          'version' => '7.10.0.0',
          'reference' => '49ec67fa7b002712da8526678abd651c09f375b2',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v1.15.1',
          'version' => '1.15.1.0',
          'reference' => '8ab0b32c8caa4a2e09700ea32925441385e4a5dc',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'openspout/openspout' => 
        array (
          'pretty_version' => 'v4.23.0',
          'version' => '4.23.0.0',
          'reference' => '28f6a0e45acc3377f34c26cc3866e21f0447e0c8',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../openspout/openspout',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pestphp/pest' => 
        array (
          'pretty_version' => 'v2.33.2',
          'version' => '2.33.2.0',
          'reference' => 'eeade88ad236f881f044430e0e9fefaad255718f',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../pestphp/pest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'e05d2859e08c2567ee38ce8b005d044e72648c0b',
          'type' => 'composer-plugin',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../pestphp/pest-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-arch' => 
        array (
          'pretty_version' => 'v2.7.0',
          'version' => '2.7.0.0',
          'reference' => 'd23b2d7498475354522c3818c42ef355dca3fcda',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../pestphp/pest-plugin-arch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-laravel' => 
        array (
          'pretty_version' => 'v2.2.0',
          'version' => '2.2.0.0',
          'reference' => '77a2838c1d3b09d147211e76a48987ba9a758279',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../pestphp/pest-plugin-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-livewire' => 
        array (
          'pretty_version' => 'v2.1.0',
          'version' => '2.1.0.0',
          'reference' => 'e72a2f850f727dfdb6bfa6e2ee6ff478ccc93f97',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../pestphp/pest-plugin-livewire',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => '97803eca37d319dfa7826cc2437fc020857acb53',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phenx/php-font-lib' => 
        array (
          'pretty_version' => '0.5.5',
          'version' => '0.5.5.0',
          'reference' => '671df0f3516252011aa94f9e8e3b3b66199339f8',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../phenx/php-font-lib',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phenx/php-svg-lib' => 
        array (
          'pretty_version' => '0.5.1',
          'version' => '0.5.1.0',
          'reference' => '8a8a1ebcf6aea861ef30197999f096f7bd4b4456',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../phenx/php-svg-lib',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpdocumentor/reflection-common' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../phpdocumentor/reflection-common',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpdocumentor/reflection-docblock' => 
        array (
          'pretty_version' => '5.3.0',
          'version' => '5.3.0.0',
          'reference' => '622548b623e81ca6d78b721c5e029f4ce664f170',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../phpdocumentor/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/type-resolver' => 
        array (
          'pretty_version' => '1.8.0',
          'version' => '1.8.0.0',
          'reference' => 'fad452781b3d774e3337b0c0b245dd8e5a4455fc',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../phpdocumentor/type-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpmyadmin/sql-parser' => 
        array (
          'pretty_version' => '5.9.0',
          'version' => '5.9.0.0',
          'reference' => '011fa18a4e55591fac6545a821921dd1d61c6984',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../phpmyadmin/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.2',
          'version' => '1.9.2.0',
          'reference' => '80735db690fe4fc5c76dfa7f9b770634285fa820',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpdoc-parser' => 
        array (
          'pretty_version' => '1.25.0',
          'version' => '1.25.0.0',
          'reference' => 'bd84b629c8de41aa2ae82c067c955e06f1b00240',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../phpstan/phpdoc-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '1.10.56',
          'version' => '1.10.56.0',
          'reference' => '27816a01aea996191ee14d010f325434c0ee76fa',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '10.1.11',
          'version' => '10.1.11.0',
          'reference' => '78c3b7625965c2513ee96569a4dbb62601784145',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '4.1.0',
          'version' => '4.1.0.0',
          'reference' => 'a95037b6d9e608ba092da1b23931e537cadc3c3c',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'reference' => 'f5e568ba02fa5ba0ddd0f618391d5a9ea50b06d7',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '0c7b06ff49e3d5072f057eb1fa59258bf287a748',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => 'e2a2d67966e740530f4a3343fe2e030ffdc1161d',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '10.5.9',
          'version' => '10.5.9.0',
          'reference' => '0bd663704f0165c9e76fe4f06ffa6a1ca727fdbe',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => 'aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../psr/cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.0.2',
          'version' => '1.0.2.0',
          'reference' => 'e616d01114759c4c489f93b099585439f795fe35',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => 'fe5ea303b0887d5caefd3d431c3e61ad47037001',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '3.0.0',
            1 => '1.0|2.0|3.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.0',
          'version' => '0.12.0.0',
          'reference' => '750bf031a48fd07c673dbe3f11f72362ea306d0d',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => 'a4b48764bfbb8f3a6a4d1aeb1a35bb5e9ecac4a5',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.7.5',
          'version' => '4.7.5.0',
          'reference' => '5f0df49ae5ad6efb7afa69e6bfab4e5b1e080d8e',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.7.5',
          ),
        ),
        'ryangjchandler/blade-capture-directive' => 
        array (
          'pretty_version' => 'v0.3.0',
          'version' => '0.3.0.0',
          'reference' => '62fd2ecb50b938a46025093bcb64fcaddd531f89',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../ryangjchandler/blade-capture-directive',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'sabberworm/php-css-parser' => 
        array (
          'pretty_version' => '8.4.0',
          'version' => '8.4.0.0',
          'reference' => 'e41d2140031d533348b2192a83f02d8dd8a71d30',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../sabberworm/php-css-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => 'efdc130dbbbb8ef0b545a994fd811725c5282cae',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => 'a81fee9eef0b7a76af11d121767abc44c104e503',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '5e3a687f7d8ae33fb362c5c0743794bbb2420a1d',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '5.0.1',
          'version' => '5.0.1.0',
          'reference' => '2db5010a484d53ebf536087a70b4a5423c102372',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '68ff824baeae169ec9f2137158ee529584553799',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '5.1.0',
          'version' => '5.1.0.0',
          'reference' => 'fbf413a49e54f6b9b17e12d900ac7f6101591b7f',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => '43c751b41d74f96cbbd4e07b7aec9675651e2951',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '5.1.1',
          'version' => '5.1.1.0',
          'reference' => '64f51654862e0f5e318db7e9dcc2292c63cdbddc',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => '7ea9ead78f6d380d2a667864c132c2f7b83055e4',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => '856e7f6a75a84e339195d48c556f23be2ebf75d0',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => '202d0e344a580d7f7d04b3fafce6933e59dae906',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '24ed13d98130f0e7122df55d06c5c4942a577957',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => '05909fb5bc7df4c52992396d0116aed689f93712',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'reference' => '462699a16464c3944eefc02ebdd77882bd3925bf',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'c51fa83a5d8f43f1402e3f32a005e6262244ef17',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/backtrace' => 
        array (
          'pretty_version' => '1.5.3',
          'version' => '1.5.3.0',
          'reference' => '483f76a82964a0431aa836b6ed0edde0c248e3ab',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../spatie/backtrace',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/color' => 
        array (
          'pretty_version' => '1.5.3',
          'version' => '1.5.3.0',
          'reference' => '49739265900cabce4640cd26c3266fd8d2cca390',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../spatie/color',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/eloquent-sortable' => 
        array (
          'pretty_version' => '4.1.0',
          'version' => '4.1.0.0',
          'reference' => '960ee1c888171f77cba9e3108da69c00a0d02e9c',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../spatie/eloquent-sortable',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/flare-client-php' => 
        array (
          'pretty_version' => '1.4.3',
          'version' => '1.4.3.0',
          'reference' => '5db2fdd743c3ede33f2a5367d89ec1a7c9c1d1ec',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../spatie/flare-client-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/ignition' => 
        array (
          'pretty_version' => '1.12.0',
          'version' => '1.12.0.0',
          'reference' => '5b6f801c605a593106b623e45ca41496a6e7d56d',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../spatie/ignition',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/image' => 
        array (
          'pretty_version' => '3.3.4',
          'version' => '3.3.4.0',
          'reference' => '6bd35eecd44a08f93fd0436f99e9adbe3ebc05da',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../spatie/image',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/image-optimizer' => 
        array (
          'pretty_version' => '1.7.2',
          'version' => '1.7.2.0',
          'reference' => '62f7463483d1bd975f6f06025d89d42a29608fe1',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../spatie/image-optimizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/invade' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => '7b20a25486de69198e402da20dc924d8bcc8024a',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../spatie/invade',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-ignition' => 
        array (
          'pretty_version' => '2.4.1',
          'version' => '2.4.1.0',
          'reference' => '005e1e7b1232f3b22d7e7be3f602693efc7dba67',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../spatie/laravel-ignition',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/laravel-medialibrary' => 
        array (
          'pretty_version' => '11.0.5',
          'version' => '11.0.5.0',
          'reference' => 'fded7c97489d1d0d0dac8111a108253b22a5c247',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../spatie/laravel-medialibrary',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-package-tools' => 
        array (
          'pretty_version' => '1.16.2',
          'version' => '1.16.2.0',
          'reference' => 'e62eeb1fe8a8a0b2e83227a6c279c8c59f7d3a15',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../spatie/laravel-package-tools',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-settings' => 
        array (
          'pretty_version' => '3.2.3',
          'version' => '3.2.3.0',
          'reference' => '2cca592b32ddce15b32ef1ef652d346416d2da03',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../spatie/laravel-settings',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/temporary-directory' => 
        array (
          'pretty_version' => '2.2.1',
          'version' => '2.2.1.0',
          'reference' => '76949fa18f8e1a7f663fd2eaa1d00e0bcea0752a',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../spatie/temporary-directory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v6.4.3',
          'version' => '6.4.3.0',
          'reference' => '2aaf83b4de5b9d43b93e4aec6f2f8b676f7c567e',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v7.0.0',
          'version' => '7.0.0.0',
          'reference' => 'bb51d46e53ef8d50d523f0c5faedba056a27943e',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.4.0',
          'version' => '3.4.0.0',
          'reference' => '7c3aff79d10325257a001fcf92d991f24fc967cf',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'reference' => 'c873490a1c97b3a0a4838afc36ff36c112d02788',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v7.0.2',
          'version' => '7.0.2.0',
          'reference' => '098b62ae81fdd6cbf941f355059f617db28f4f9a',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.4.0',
          'version' => '3.4.0.0',
          'reference' => 'a76aed96a42d2b521153fb382d418e30d18b59df',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'reference' => '11d736e97f116ac375a81f96e662911a34cd50ce',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/html-sanitizer' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'reference' => '9cc71f272eb62504872c80845074f236e8e43536',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/html-sanitizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v6.4.2',
          'version' => '6.4.2.0',
          'reference' => '172d807f9ef3fc3fbed8377cc57c20d389269271',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v6.4.2',
          'version' => '6.4.2.0',
          'reference' => '13e8387320b5942d0dc408440c888e2d526efef4',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v6.4.2',
          'version' => '6.4.2.0',
          'reference' => '6da89e5c9202f129717a770a03183fb140720168',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'reference' => 'ca4f58b2ef4baa8f6cecbeca2573f88cd577d205',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.28.0',
          'version' => '1.28.0.0',
          'reference' => 'ea208ce43cbb04af6867b4fdddb1bdbf84cc28cb',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.28.0',
          'version' => '1.28.0.0',
          'reference' => '875e90aeea2777b6f135677f618529449334a612',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.28.0',
          'version' => '1.28.0.0',
          'reference' => 'ecaafce9f77234a6a449d29e49267ba10499116d',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.28.0',
          'version' => '1.28.0.0',
          'reference' => '8c4ad05dd0120b6a53c1ca374dca2ad0a1c4ed92',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.28.0',
          'version' => '1.28.0.0',
          'reference' => '42292d99c55abe617799667f454222c54c60e229',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php72' => 
        array (
          'pretty_version' => 'v1.28.0',
          'version' => '1.28.0.0',
          'reference' => '70f4aebd92afca2f865444d30a4d2151c13c3179',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/polyfill-php72',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.28.0',
          'version' => '1.28.0.0',
          'reference' => '6caa57379c4aec19c0a12a38b59b26487dcfe4b5',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.28.0',
          'version' => '1.28.0.0',
          'reference' => 'b0f46ebbeeeda3e9d2faebdfbf4b4eae9b59fa11',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.28.0',
          'version' => '1.28.0.0',
          'reference' => '9c44518a5aff8da565c8a55dbe85d2769e6f630e',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v6.4.3',
          'version' => '6.4.3.0',
          'reference' => '31642b0818bfcff85930344ef93193f8c607e0a3',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v6.4.2',
          'version' => '6.4.2.0',
          'reference' => '98eab13a07fddc85766f1756129c69f207ffbc21',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.4.1',
          'version' => '3.4.1.0',
          'reference' => 'fe07cbc8d837f60caf7018068e350cc5163681a0',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v7.0.3',
          'version' => '7.0.3.0',
          'reference' => '524aac4a280b90a4420d8d6a040718d0586505ac',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v6.4.2',
          'version' => '6.4.2.0',
          'reference' => 'a2ab2ec1a462e53016de8e8d5e8912bfd62ea681',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.4.1',
          'version' => '3.4.1.0',
          'reference' => '06450585bf65e978026bda220cdebca3f867fde7',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'reference' => '8092dd1b1a41372110d06374f99ee62f7f0b9a92',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v6.4.2',
          'version' => '6.4.2.0',
          'reference' => '68d6573ec98715ddcae5a0a85bee3c1c27a4c33f',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v7.0.0',
          'version' => '7.0.0.0',
          'reference' => '0055b230c408428b9b5cde7c55659555be5c0278',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ta-tikoma/phpunit-architecture-test' => 
        array (
          'pretty_version' => '0.8.4',
          'version' => '0.8.4.0',
          'reference' => '89f0dea1cb0f0d5744d3ec1764a286af5e006636',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../ta-tikoma/phpunit-architecture-test',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.2.2',
          'version' => '1.2.2.0',
          'reference' => 'b2ad5003ca10d4ee50a12da31de12a5774ba6b96',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.2.7',
          'version' => '2.2.7.0',
          'reference' => '83ee6f38df0a63106a9e4536e3060458b74ccedb',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.0',
          'version' => '5.6.0.0',
          'reference' => '2cf9fb6054c2bb1d59d1f3817706ecdb9d2934c4',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'reference' => 'b56450eed252f6801410d810c8e1727224ae0743',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '1.11.0',
          'version' => '1.11.0.0',
          'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
          'type' => 'library',
          'install_path' => '/home/vagrant/code/project-crafter/vendor/composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    '/home/vagrant/code/project-crafter/vendor/larastan/larastan/bootstrap.php' => '7ec7406cae3f706d3c160e03d7967840a5d9f98c',
    'phar:///home/vagrant/code/project-crafter/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php' => 'eaf9127f074e9c7ebc65043ec4050f9fed60c2bb',
    'phar:///home/vagrant/code/project-crafter/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar:///home/vagrant/code/project-crafter/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar:///home/vagrant/code/project-crafter/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'PDO_ODBC',
    4 => 'Phar',
    5 => 'Reflection',
    6 => 'SPL',
    7 => 'SimpleXML',
    8 => 'Zend OPcache',
    9 => 'bcmath',
    10 => 'bz2',
    11 => 'calendar',
    12 => 'ctype',
    13 => 'curl',
    14 => 'date',
    15 => 'dba',
    16 => 'dom',
    17 => 'enchant',
    18 => 'exif',
    19 => 'fileinfo',
    20 => 'filter',
    21 => 'ftp',
    22 => 'gd',
    23 => 'gettext',
    24 => 'gmp',
    25 => 'hash',
    26 => 'iconv',
    27 => 'igbinary',
    28 => 'imagick',
    29 => 'imap',
    30 => 'intl',
    31 => 'json',
    32 => 'ldap',
    33 => 'libxml',
    34 => 'mbstring',
    35 => 'memcached',
    36 => 'msgpack',
    37 => 'mysqli',
    38 => 'mysqlnd',
    39 => 'odbc',
    40 => 'openssl',
    41 => 'pcntl',
    42 => 'pcre',
    43 => 'pdo_dblib',
    44 => 'pdo_mysql',
    45 => 'pdo_pgsql',
    46 => 'pdo_sqlite',
    47 => 'pgsql',
    48 => 'posix',
    49 => 'pspell',
    50 => 'random',
    51 => 'readline',
    52 => 'redis',
    53 => 'session',
    54 => 'shmop',
    55 => 'snmp',
    56 => 'soap',
    57 => 'sockets',
    58 => 'sodium',
    59 => 'sqlite3',
    60 => 'standard',
    61 => 'sysvmsg',
    62 => 'sysvsem',
    63 => 'sysvshm',
    64 => 'tidy',
    65 => 'tokenizer',
    66 => 'xml',
    67 => 'xmlreader',
    68 => 'xmlrpc',
    69 => 'xmlwriter',
    70 => 'xsl',
    71 => 'zip',
    72 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '8',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
); },
	'collectedDataCallback' => static function (): array { return array (
); },
	'dependencies' => array (
  '/home/vagrant/code/project-crafter/app/Casts/MoneyCast.php' => 
  array (
    'fileHash' => '1b6c88290e103d423abfabc1935a1f1ef6aa1811',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/domain/Project/Models/Project.php',
      1 => '/home/vagrant/code/project-crafter/domain/Transaction/Models/Invoice.php',
      2 => '/home/vagrant/code/project-crafter/domain/Transaction/Models/InvoiceItem.php',
      3 => '/home/vagrant/code/project-crafter/domain/Transaction/Models/Payment.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Console/Kernel.php' => 
  array (
    'fileHash' => '7762951222b8c365bbfcd10db5f2c08e39ff8142',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Exceptions/Handler.php' => 
  array (
    'fileHash' => 'fe00c651cc3178876f5a61e05d595da4b8210c0c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Pages/ManageGeneralSettings.php' => 
  array (
    'fileHash' => '2d1e5fecd5fbb75e04e568f83399996a756bdcc2',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Pages/OrganizerBoard.php' => 
  array (
    'fileHash' => '17719cfa9e1c6211ad03c4e254f3ac1bf8d1f9ac',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource.php' => 
  array (
    'fileHash' => '5639f883834d9df3cfb7bb47c3bde44d0c649580',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource/Pages/CreateClient.php',
      1 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource/Pages/EditClient.php',
      2 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource/Pages/ListClients.php',
      3 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource/Pages/ViewClient.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource/Pages/CreateClient.php' => 
  array (
    'fileHash' => '72d90f5414145ea7b60a7636dd11e550c030bdcf',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource/Pages/EditClient.php' => 
  array (
    'fileHash' => '29109a37b69e6e600b796eb490e00c0f8c753726',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource/Pages/ListClients.php' => 
  array (
    'fileHash' => '82a14dddc6e856b84ffe86e5381628aa9f0fc4f6',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource/Pages/ViewClient.php' => 
  array (
    'fileHash' => 'a5fb8ba2106da3f9beb9cf443bd1f994548edd8e',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource/RelationManagers/DocumentsRelationManager.php' => 
  array (
    'fileHash' => '509ef63a922004a78577a5ecbaf3f9a92269dddf',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource/RelationManagers/ProjectsRelationManager.php' => 
  array (
    'fileHash' => '232c6cce61a6f3dec9b76bf774a42c854abb96ae',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/DocumentResource.php' => 
  array (
    'fileHash' => '652cdbc7b77d3c5a7da36de7027a162403826081',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource/RelationManagers/DocumentsRelationManager.php',
      1 => '/home/vagrant/code/project-crafter/app/Filament/Resources/DocumentResource/Pages/CreateDocument.php',
      2 => '/home/vagrant/code/project-crafter/app/Filament/Resources/DocumentResource/Pages/EditDocument.php',
      3 => '/home/vagrant/code/project-crafter/app/Filament/Resources/DocumentResource/Pages/ListDocuments.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/DocumentResource/Pages/CreateDocument.php' => 
  array (
    'fileHash' => '7e3f47bb97959817085cef71bda6ac9c1c62eab0',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/DocumentResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/DocumentResource/Pages/EditDocument.php' => 
  array (
    'fileHash' => '438ee0d97ed6a34faa06a63c735466710ed3389b',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/DocumentResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/DocumentResource/Pages/ListDocuments.php' => 
  array (
    'fileHash' => '9d9093f346fbe4c57fc445191b8baa253f29191b',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/DocumentResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/InvoiceResource.php' => 
  array (
    'fileHash' => '8902be14b691aeed1ab2585c9a05caeff1fae2e4',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/InvoiceResource/Pages/CreateInvoice.php',
      1 => '/home/vagrant/code/project-crafter/app/Filament/Resources/InvoiceResource/Pages/EditInvoice.php',
      2 => '/home/vagrant/code/project-crafter/app/Filament/Resources/InvoiceResource/Pages/ListInvoices.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/InvoiceResource/Pages/CreateInvoice.php' => 
  array (
    'fileHash' => 'b5fbc50d8cb64c7de591ea035c7c6ad883ec18d9',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/InvoiceResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/InvoiceResource/Pages/EditInvoice.php' => 
  array (
    'fileHash' => 'acc33bc49c437ec91d3fb64d68ccf5d068c09b84',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/InvoiceResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/InvoiceResource/Pages/ListInvoices.php' => 
  array (
    'fileHash' => '47e62392922f89505ab6f2ab9d3ec54f645ec89a',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/InvoiceResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/PaymentResource.php' => 
  array (
    'fileHash' => '9a7355138371bc26707e89921d405151010900ec',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/PaymentResource/Pages/CreatePayment.php',
      1 => '/home/vagrant/code/project-crafter/app/Filament/Resources/PaymentResource/Pages/EditPayment.php',
      2 => '/home/vagrant/code/project-crafter/app/Filament/Resources/PaymentResource/Pages/ListPayments.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/PaymentResource/Pages/CreatePayment.php' => 
  array (
    'fileHash' => '5342d0f25f2b3cff8093c9d4f233883de1900510',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/PaymentResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/PaymentResource/Pages/EditPayment.php' => 
  array (
    'fileHash' => 'cfcf63820a0502147767f69ed3fcaa05f4c330cc',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/PaymentResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/PaymentResource/Pages/ListPayments.php' => 
  array (
    'fileHash' => '8b60494174c65dc812053fc3fe16ff37ea551762',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/PaymentResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource.php' => 
  array (
    'fileHash' => 'ab45683772a6d8487ddf838e0ccc66fef09e8f61',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource/RelationManagers/ProjectsRelationManager.php',
      1 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource/Pages/CreateProject.php',
      2 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource/Pages/EditProject.php',
      3 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource/Pages/ListProjects.php',
      4 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource/Pages/ViewProject.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource/Pages/CreateProject.php' => 
  array (
    'fileHash' => '8d722b1a0edd36ac4c8cb45f39185e6d594859f7',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource/Pages/EditProject.php' => 
  array (
    'fileHash' => 'bbf147bd92ff36f7c033ca08732683c23ad2fe64',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource/Pages/ListProjects.php' => 
  array (
    'fileHash' => '62fb71ccb9a6dc1f516c1c571fb6d780807e0537',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource/Pages/ViewProject.php' => 
  array (
    'fileHash' => '5c2afbe45edabbad52d69dc97fc045f6d4f02e09',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource/RelationManagers/TaskLogsRelationManager.php' => 
  array (
    'fileHash' => '8165380c4139cfca0f997908994c2f4a0ae5babb',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/TaskLogResource.php' => 
  array (
    'fileHash' => '0c5aeee82929547c7ebfe3e68a7261d5b45ac120',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/TaskLogResource/Pages/CreateTaskLog.php',
      1 => '/home/vagrant/code/project-crafter/app/Filament/Resources/TaskLogResource/Pages/EditTaskLog.php',
      2 => '/home/vagrant/code/project-crafter/app/Filament/Resources/TaskLogResource/Pages/ListTaskLogs.php',
      3 => '/home/vagrant/code/project-crafter/app/Filament/Resources/TaskLogResource/Pages/ViewTaskLog.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/TaskLogResource/Pages/CreateTaskLog.php' => 
  array (
    'fileHash' => '89aaa95372c5919b0568e8dfef3db342aba80f0c',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/TaskLogResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/TaskLogResource/Pages/EditTaskLog.php' => 
  array (
    'fileHash' => '4ec298dd887e2cd74d5d2c9515d9e91027dc2004',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/TaskLogResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/TaskLogResource/Pages/ListTaskLogs.php' => 
  array (
    'fileHash' => '606eb90ea2e7a7bf2b14440a7f2f712b5b768832',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/TaskLogResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/TaskLogResource/Pages/ViewTaskLog.php' => 
  array (
    'fileHash' => '18e841d605bcb01ded7ce4238e17c77fb0e1b728',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/TaskLogResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Widgets/ClientsChart.php' => 
  array (
    'fileHash' => '52064a6ce91636b3e571f61a90f070c7665815a3',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Widgets/ProjectsChart.php' => 
  array (
    'fileHash' => 'f7e023700b2536e29e26636933c926532f3796cc',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Widgets/StatsOverview.php' => 
  array (
    'fileHash' => 'd944c9e78f1a71e5bfaecd766c81f9f51d834053',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Http/Controllers/Controller.php' => 
  array (
    'fileHash' => '1bff29ea03648d6fedf22b3619d8964630d46a69',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Http/Kernel.php' => 
  array (
    'fileHash' => 'f9b34fdbcbfcc43b6f7bee0af39809fa5c91a7dd',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Http/Middleware/Authenticate.php' => 
  array (
    'fileHash' => '590ff6a7909f166f747fab7f052d0337d7edcea6',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Http/Kernel.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Http/Middleware/EncryptCookies.php' => 
  array (
    'fileHash' => 'fcbbfaae9d7ac781cd043ee7ce2ee66800d075ee',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Http/Kernel.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Http/Middleware/PreventRequestsDuringMaintenance.php' => 
  array (
    'fileHash' => '3f1cc28f08b8a3a8bbd1495e187fc197110cdab1',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Http/Kernel.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Http/Middleware/RedirectIfAuthenticated.php' => 
  array (
    'fileHash' => '22865d62613f580ef172e96566cf7b7221117c3d',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Http/Kernel.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Http/Middleware/TrimStrings.php' => 
  array (
    'fileHash' => 'fdae9e792d68b2827446435ff17d6848726a1e81',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Http/Kernel.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Http/Middleware/TrustHosts.php' => 
  array (
    'fileHash' => '67a8483c3620b6cd2c6354e8282fb08a98feb608',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Http/Middleware/TrustProxies.php' => 
  array (
    'fileHash' => '4c915478c380e43a2889f66130fe95f9b90ca5f0',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Http/Kernel.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Http/Middleware/ValidateSignature.php' => 
  array (
    'fileHash' => 'ef66937ccd20e6a189479dcc98e564cc72d4c92c',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Http/Kernel.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Http/Middleware/VerifyCsrfToken.php' => 
  array (
    'fileHash' => 'f40416cadebf79cecb5ffaa1d7bed8d360f8addd',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Http/Kernel.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Providers/AppServiceProvider.php' => 
  array (
    'fileHash' => 'fc81ccb76bad7b7de3d28e528190b8e23e2376c5',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Providers/AuthServiceProvider.php' => 
  array (
    'fileHash' => '494bb0a4861384d9ba08f6b49d67830d54e54284',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Providers/BroadcastServiceProvider.php' => 
  array (
    'fileHash' => '65964eb912591e8f2a962d7f2930702f3223f9be',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Providers/EventServiceProvider.php' => 
  array (
    'fileHash' => '6b01850547a08eecb86c308bba9707beee9f6e16',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Providers/Filament/AdminPanelProvider.php' => 
  array (
    'fileHash' => '6fb040aac2392c80fe4e1829073f9d56f671e9d3',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Providers/RouteServiceProvider.php' => 
  array (
    'fileHash' => '911cae39925a7232a369b3ee67b77a71306d7433',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Http/Middleware/RedirectIfAuthenticated.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/app/Settings/GeneralSettings.php' => 
  array (
    'fileHash' => '42e4db41d932f703f308b5f0c44cbdf68b51f907',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Pages/ManageGeneralSettings.php',
      1 => '/home/vagrant/code/project-crafter/domain/Transaction/Actions/ExportInvoiceAsPdfAction.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/database/factories/ClientFactory.php' => 
  array (
    'fileHash' => '200bacf2d19f420c2e32988ab6ef6b04b479bbb6',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/database/factories/DocumentFactory.php',
      1 => '/home/vagrant/code/project-crafter/database/factories/InvoiceFactory.php',
      2 => '/home/vagrant/code/project-crafter/database/factories/ProjectFactory.php',
      3 => '/home/vagrant/code/project-crafter/domain/Client/Models/Client.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/database/factories/DocumentFactory.php' => 
  array (
    'fileHash' => '671ed992d1d491e346e1c09333bcc2fb8cd0934a',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/domain/Document/Models/Document.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/database/factories/InvoiceFactory.php' => 
  array (
    'fileHash' => 'c27c0fba6ff7031c1893854ef6c6d4d69c4b7785',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/database/factories/InvoiceItemFactory.php',
      1 => '/home/vagrant/code/project-crafter/domain/Transaction/Models/Invoice.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/database/factories/InvoiceItemFactory.php' => 
  array (
    'fileHash' => '460783dc966bcbf7c0ad1aaad8a6b1143c3b769e',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/domain/Transaction/Models/InvoiceItem.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/database/factories/ProjectFactory.php' => 
  array (
    'fileHash' => 'ab1d81be5cfc6cdf7a8d97148efad14f0775261d',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/domain/Project/Models/Project.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/database/factories/UserFactory.php' => 
  array (
    'fileHash' => '3a1979c2ba013c50e2482c07b0fef1a7ddb84ec0',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/database/seeders/DatabaseSeeder.php',
      1 => '/home/vagrant/code/project-crafter/domain/User/Models/User.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/database/seeders/DatabaseSeeder.php' => 
  array (
    'fileHash' => 'fe5ddcfdca8e81f71ae1354a9b6370eaa09fb9cf',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/project-crafter/database/settings/2024_01_22_174539_create_general_settings.php' => 
  array (
    'fileHash' => '45d3bbb4f0b18a2f8f3d34700bf9fcd226844d8a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/vagrant/code/project-crafter/domain/Client/Models/Client.php' => 
  array (
    'fileHash' => '745b94a9162d11c39e8ea9b341a9261dec49e512',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource.php',
      1 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource/RelationManagers/DocumentsRelationManager.php',
      2 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource/RelationManagers/ProjectsRelationManager.php',
      3 => '/home/vagrant/code/project-crafter/app/Filament/Resources/DocumentResource.php',
      4 => '/home/vagrant/code/project-crafter/app/Filament/Resources/InvoiceResource.php',
      5 => '/home/vagrant/code/project-crafter/app/Filament/Resources/PaymentResource.php',
      6 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource.php',
      7 => '/home/vagrant/code/project-crafter/app/Filament/Resources/TaskLogResource.php',
      8 => '/home/vagrant/code/project-crafter/app/Filament/Widgets/ClientsChart.php',
      9 => '/home/vagrant/code/project-crafter/app/Filament/Widgets/ProjectsChart.php',
      10 => '/home/vagrant/code/project-crafter/app/Filament/Widgets/StatsOverview.php',
      11 => '/home/vagrant/code/project-crafter/app/Providers/EventServiceProvider.php',
      12 => '/home/vagrant/code/project-crafter/database/factories/ClientFactory.php',
      13 => '/home/vagrant/code/project-crafter/database/factories/DocumentFactory.php',
      14 => '/home/vagrant/code/project-crafter/database/factories/InvoiceFactory.php',
      15 => '/home/vagrant/code/project-crafter/database/factories/ProjectFactory.php',
      16 => '/home/vagrant/code/project-crafter/domain/Document/Models/Document.php',
      17 => '/home/vagrant/code/project-crafter/domain/Project/Models/Project.php',
      18 => '/home/vagrant/code/project-crafter/domain/Project/Models/TaskLog.php',
      19 => '/home/vagrant/code/project-crafter/domain/Transaction/Actions/ExportInvoiceAsPdfAction.php',
      20 => '/home/vagrant/code/project-crafter/domain/Transaction/Actions/GenerateInvoiceNumberAction.php',
      21 => '/home/vagrant/code/project-crafter/domain/Transaction/Models/Invoice.php',
      22 => '/home/vagrant/code/project-crafter/domain/Transaction/Models/InvoiceItem.php',
      23 => '/home/vagrant/code/project-crafter/domain/Transaction/Models/Payment.php',
      24 => '/home/vagrant/code/project-crafter/domain/Transaction/Observers/InvoiceObserver.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/domain/Document/Models/Document.php' => 
  array (
    'fileHash' => 'e2fcb2f30f5dc0741202ed307f8d824dc60918c2',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource.php',
      1 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource/RelationManagers/DocumentsRelationManager.php',
      2 => '/home/vagrant/code/project-crafter/app/Filament/Resources/DocumentResource.php',
      3 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource.php',
      4 => '/home/vagrant/code/project-crafter/app/Filament/Widgets/ClientsChart.php',
      5 => '/home/vagrant/code/project-crafter/database/factories/ClientFactory.php',
      6 => '/home/vagrant/code/project-crafter/database/factories/DocumentFactory.php',
      7 => '/home/vagrant/code/project-crafter/domain/Client/Models/Client.php',
      8 => '/home/vagrant/code/project-crafter/domain/Project/Models/Project.php',
      9 => '/home/vagrant/code/project-crafter/domain/Transaction/Actions/ExportInvoiceAsPdfAction.php',
      10 => '/home/vagrant/code/project-crafter/domain/Transaction/Models/Invoice.php',
      11 => '/home/vagrant/code/project-crafter/domain/Transaction/Models/Payment.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/domain/Project/Actions/GetCurrencyOptionsAction.php' => 
  array (
    'fileHash' => '614aeb9a9844c1cc42fc18cf3b1d8199ba0ec6bf',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/PaymentResource.php',
      1 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource.php',
      2 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource/RelationManagers/TaskLogsRelationManager.php',
      3 => '/home/vagrant/code/project-crafter/app/Filament/Resources/TaskLogResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/domain/Project/Models/Project.php' => 
  array (
    'fileHash' => '37703e09f3f358207064664473a2b7c911b9c008',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource.php',
      1 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource/RelationManagers/ProjectsRelationManager.php',
      2 => '/home/vagrant/code/project-crafter/app/Filament/Resources/DocumentResource.php',
      3 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource.php',
      4 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource/RelationManagers/TaskLogsRelationManager.php',
      5 => '/home/vagrant/code/project-crafter/app/Filament/Resources/TaskLogResource.php',
      6 => '/home/vagrant/code/project-crafter/app/Filament/Widgets/ClientsChart.php',
      7 => '/home/vagrant/code/project-crafter/app/Filament/Widgets/ProjectsChart.php',
      8 => '/home/vagrant/code/project-crafter/app/Filament/Widgets/StatsOverview.php',
      9 => '/home/vagrant/code/project-crafter/database/factories/ClientFactory.php',
      10 => '/home/vagrant/code/project-crafter/database/factories/ProjectFactory.php',
      11 => '/home/vagrant/code/project-crafter/domain/Client/Models/Client.php',
      12 => '/home/vagrant/code/project-crafter/domain/Document/Models/Document.php',
      13 => '/home/vagrant/code/project-crafter/domain/Project/Models/TaskLog.php',
      14 => '/home/vagrant/code/project-crafter/domain/Transaction/Actions/ExportInvoiceAsPdfAction.php',
      15 => '/home/vagrant/code/project-crafter/domain/Transaction/Models/Invoice.php',
      16 => '/home/vagrant/code/project-crafter/domain/Transaction/Models/Payment.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/domain/Project/Models/TaskLog.php' => 
  array (
    'fileHash' => '442d3b85191e9477bdc36ad6a0689b3bdddf42a6',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource/RelationManagers/ProjectsRelationManager.php',
      1 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource.php',
      2 => '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource/RelationManagers/TaskLogsRelationManager.php',
      3 => '/home/vagrant/code/project-crafter/app/Filament/Resources/TaskLogResource.php',
      4 => '/home/vagrant/code/project-crafter/app/Filament/Widgets/ProjectsChart.php',
      5 => '/home/vagrant/code/project-crafter/app/Filament/Widgets/StatsOverview.php',
      6 => '/home/vagrant/code/project-crafter/database/factories/ProjectFactory.php',
      7 => '/home/vagrant/code/project-crafter/domain/Client/Models/Client.php',
      8 => '/home/vagrant/code/project-crafter/domain/Project/Models/Project.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/domain/Transaction/Actions/CalculateTotalPriceAction.php' => 
  array (
    'fileHash' => 'e64f1869245414d0df515f6325a20fa82c0f88ce',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/InvoiceResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/domain/Transaction/Actions/CalculateTotalQuantityAction.php' => 
  array (
    'fileHash' => 'acae7c302ce1aba5608d68615d09e62a407216e4',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/InvoiceResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/domain/Transaction/Actions/ExportInvoiceAsPdfAction.php' => 
  array (
    'fileHash' => 'a7ee4b74014712d1d5b3a9b38f095249dd0815ca',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/InvoiceResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/domain/Transaction/Actions/GenerateInvoiceNumberAction.php' => 
  array (
    'fileHash' => '783523a9c3206609d706c89f1fa8eda21a71ffe5',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/domain/Transaction/Observers/InvoiceObserver.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/domain/Transaction/DataTransferObjects/InvoiceItemData.php' => 
  array (
    'fileHash' => 'c6fd5fa3eb2bcb44f49dd398c9bd30dc4e4a14ad',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/domain/Transaction/Actions/CalculateTotalPriceAction.php',
      1 => '/home/vagrant/code/project-crafter/domain/Transaction/Actions/CalculateTotalQuantityAction.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/domain/Transaction/Enums/InvoiceStatus.php' => 
  array (
    'fileHash' => '73088e45d47157102610c1d0caf8162a809107ae',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/InvoiceResource.php',
      1 => '/home/vagrant/code/project-crafter/database/factories/InvoiceFactory.php',
      2 => '/home/vagrant/code/project-crafter/domain/Transaction/QueryBuilders/InvoiceEloquentQueryBuilder.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/domain/Transaction/Enums/PaymentType.php' => 
  array (
    'fileHash' => '44e9e16f05884f5fc11b1ed70ad2707104f9f96f',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/PaymentResource.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/domain/Transaction/Models/Invoice.php' => 
  array (
    'fileHash' => '72f559dfa2e1ec227e0bc8b65d53d5083427bcae',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/InvoiceResource.php',
      1 => '/home/vagrant/code/project-crafter/app/Filament/Resources/InvoiceResource/Pages/ListInvoices.php',
      2 => '/home/vagrant/code/project-crafter/app/Filament/Resources/PaymentResource.php',
      3 => '/home/vagrant/code/project-crafter/app/Filament/Widgets/StatsOverview.php',
      4 => '/home/vagrant/code/project-crafter/app/Providers/EventServiceProvider.php',
      5 => '/home/vagrant/code/project-crafter/database/factories/InvoiceFactory.php',
      6 => '/home/vagrant/code/project-crafter/database/factories/InvoiceItemFactory.php',
      7 => '/home/vagrant/code/project-crafter/domain/Transaction/Actions/ExportInvoiceAsPdfAction.php',
      8 => '/home/vagrant/code/project-crafter/domain/Transaction/Actions/GenerateInvoiceNumberAction.php',
      9 => '/home/vagrant/code/project-crafter/domain/Transaction/Models/InvoiceItem.php',
      10 => '/home/vagrant/code/project-crafter/domain/Transaction/Models/Payment.php',
      11 => '/home/vagrant/code/project-crafter/domain/Transaction/Observers/InvoiceObserver.php',
      12 => '/home/vagrant/code/project-crafter/domain/Transaction/QueryBuilders/InvoiceEloquentQueryBuilder.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/domain/Transaction/Models/InvoiceItem.php' => 
  array (
    'fileHash' => 'da0833c0edba7af0b93eee42eead5e4a6d064c12',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/InvoiceResource.php',
      1 => '/home/vagrant/code/project-crafter/app/Providers/EventServiceProvider.php',
      2 => '/home/vagrant/code/project-crafter/database/factories/InvoiceFactory.php',
      3 => '/home/vagrant/code/project-crafter/database/factories/InvoiceItemFactory.php',
      4 => '/home/vagrant/code/project-crafter/domain/Transaction/Actions/ExportInvoiceAsPdfAction.php',
      5 => '/home/vagrant/code/project-crafter/domain/Transaction/Actions/GenerateInvoiceNumberAction.php',
      6 => '/home/vagrant/code/project-crafter/domain/Transaction/Models/Invoice.php',
      7 => '/home/vagrant/code/project-crafter/domain/Transaction/Models/Payment.php',
      8 => '/home/vagrant/code/project-crafter/domain/Transaction/Observers/InvoiceObserver.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/domain/Transaction/Models/Payment.php' => 
  array (
    'fileHash' => '38a43db38f4a83981c8bd42b3662df031655b949',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/PaymentResource.php',
      1 => '/home/vagrant/code/project-crafter/app/Filament/Widgets/StatsOverview.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/domain/Transaction/Observers/InvoiceObserver.php' => 
  array (
    'fileHash' => '3ae8e9f8424666f9ba05fd04b2913a7fca7c2662',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Providers/EventServiceProvider.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/domain/Transaction/QueryBuilders/InvoiceEloquentQueryBuilder.php' => 
  array (
    'fileHash' => '69c56d37c93a9ace3d27fc1552ec96b04af00112',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Resources/InvoiceResource.php',
      1 => '/home/vagrant/code/project-crafter/app/Filament/Resources/InvoiceResource/Pages/ListInvoices.php',
      2 => '/home/vagrant/code/project-crafter/app/Providers/EventServiceProvider.php',
      3 => '/home/vagrant/code/project-crafter/database/factories/InvoiceFactory.php',
      4 => '/home/vagrant/code/project-crafter/domain/Transaction/Actions/ExportInvoiceAsPdfAction.php',
      5 => '/home/vagrant/code/project-crafter/domain/Transaction/Actions/GenerateInvoiceNumberAction.php',
      6 => '/home/vagrant/code/project-crafter/domain/Transaction/Models/Invoice.php',
      7 => '/home/vagrant/code/project-crafter/domain/Transaction/Models/InvoiceItem.php',
      8 => '/home/vagrant/code/project-crafter/domain/Transaction/Models/Payment.php',
      9 => '/home/vagrant/code/project-crafter/domain/Transaction/Observers/InvoiceObserver.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/domain/User/Enums/KanbanBoardStatus.php' => 
  array (
    'fileHash' => 'fd1d71c27465b402a3fce00e8ce6793e31806568',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Pages/OrganizerBoard.php',
      1 => '/home/vagrant/code/project-crafter/domain/User/Models/Item.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/domain/User/Models/Item.php' => 
  array (
    'fileHash' => '648598779bdd38494f260253f2ebab1f70421eea',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Filament/Pages/OrganizerBoard.php',
    ),
  ),
  '/home/vagrant/code/project-crafter/domain/User/Models/User.php' => 
  array (
    'fileHash' => '7749325268408858f97a8ed7779722a5602810ac',
    'dependentFiles' => 
    array (
      0 => '/home/vagrant/code/project-crafter/app/Providers/RouteServiceProvider.php',
      1 => '/home/vagrant/code/project-crafter/database/factories/UserFactory.php',
      2 => '/home/vagrant/code/project-crafter/database/seeders/DatabaseSeeder.php',
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/home/vagrant/code/project-crafter/app/Casts/MoneyCast.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Casts\\MoneyCast',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * https://filamentphp.com/docs/3.x/panels/getting-started#casting-the-price-to-an-integer
 */',
         'namespace' => 'App\\Casts',
         'uses' => 
        array (
          'castsattributes' => 'Illuminate\\Contracts\\Database\\Eloquent\\CastsAttributes',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Database\\Eloquent\\CastsAttributes',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'get',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'float',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attributes',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'set',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'float',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attributes',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Console/Kernel.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Kernel',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Console\\Kernel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'schedule',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the application\'s command schedule.
     */',
             'namespace' => 'App\\Console',
             'uses' => 
            array (
              'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
              'consolekernel' => 'Illuminate\\Foundation\\Console\\Kernel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'schedule',
               'type' => 'Illuminate\\Console\\Scheduling\\Schedule',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'commands',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register the commands for the application.
     */',
             'namespace' => 'App\\Console',
             'uses' => 
            array (
              'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
              'consolekernel' => 'Illuminate\\Foundation\\Console\\Kernel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Exceptions/Handler.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Exceptions\\Handler',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Exceptions\\Handler',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'dontFlash',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Exceptions',
             'uses' => 
            array (
              'exceptionhandler' => 'Illuminate\\Foundation\\Exceptions\\Handler',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register the exception handling callbacks for the application.
     */',
             'namespace' => 'App\\Exceptions',
             'uses' => 
            array (
              'exceptionhandler' => 'Illuminate\\Foundation\\Exceptions\\Handler',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Pages/ManageGeneralSettings.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Pages\\ManageGeneralSettings',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Pages\\SettingsPage',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'navigationIcon',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'settings',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'title',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'form',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Filament\\Forms\\Form',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'form',
               'type' => 'Filament\\Forms\\Form',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Pages/OrganizerBoard.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Pages\\OrganizerBoard',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Mokhosh\\FilamentKanban\\Pages\\KanbanBoard',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'navigationIcon',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'recordTitleAttribute',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'recordStatusAttribute',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getNavigationGroup',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'statuses',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Support\\Collection',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'records',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Support\\Collection',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'onStatusChanged',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'recordId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'fromOrderedIds',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'toOrderedIds',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'onSortChanged',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'recordId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'orderedIds',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getEditModalFormSchema',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'recordId',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'editRecord',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'recordId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'state',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getEditModalRecordData',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'recordId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'additionalRecordData',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Support\\Collection',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'record',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getHeaderActions',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getNavigationBadge',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\ClientResource',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Resource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'navigationIcon',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'recordTitleAttribute',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getNavigationGroup',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'form',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Filament\\Forms\\Form',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'form',
               'type' => 'Filament\\Forms\\Form',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'table',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Filament\\Tables\\Table',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'table',
               'type' => 'Filament\\Tables\\Table',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getRelations',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getPages',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'infolist',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Filament\\Infolists\\Infolist',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'infolist',
               'type' => 'Filament\\Infolists\\Infolist',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getNavigationBadge',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource/Pages/CreateClient.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\ClientResource\\Pages\\CreateClient',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Pages\\CreateRecord',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'resource',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource/Pages/EditClient.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\ClientResource\\Pages\\EditClient',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Pages\\EditRecord',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'resource',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getHeaderActions',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource/Pages/ListClients.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\ClientResource\\Pages\\ListClients',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Pages\\ListRecords',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'resource',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getHeaderActions',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource/Pages/ViewClient.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\ClientResource\\Pages\\ViewClient',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Pages\\ViewRecord',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'resource',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource/RelationManagers/DocumentsRelationManager.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\ClientResource\\RelationManagers\\DocumentsRelationManager',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\RelationManagers\\RelationManager',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'relationship',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'form',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Filament\\Forms\\Form',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'form',
               'type' => 'Filament\\Forms\\Form',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'table',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Filament\\Tables\\Table',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'table',
               'type' => 'Filament\\Tables\\Table',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ClientResource/RelationManagers/ProjectsRelationManager.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\ClientResource\\RelationManagers\\ProjectsRelationManager',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\RelationManagers\\RelationManager',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'relationship',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'form',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Filament\\Forms\\Form',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'form',
               'type' => 'Filament\\Forms\\Form',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'table',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Filament\\Tables\\Table',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'table',
               'type' => 'Filament\\Tables\\Table',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/DocumentResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\DocumentResource',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Resource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'navigationIcon',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'recordTitleAttribute',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getNavigationGroup',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'form',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Filament\\Forms\\Form',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'form',
               'type' => 'Filament\\Forms\\Form',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'table',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Filament\\Tables\\Table',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'table',
               'type' => 'Filament\\Tables\\Table',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getRelations',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getPages',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/DocumentResource/Pages/CreateDocument.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\DocumentResource\\Pages\\CreateDocument',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Pages\\CreateRecord',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'resource',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/DocumentResource/Pages/EditDocument.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\DocumentResource\\Pages\\EditDocument',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Pages\\EditRecord',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'resource',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getHeaderActions',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/DocumentResource/Pages/ListDocuments.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\DocumentResource\\Pages\\ListDocuments',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Pages\\ListRecords',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'resource',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getHeaderActions',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/InvoiceResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\InvoiceResource',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Resource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'navigationIcon',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getNavigationGroup',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'form',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Filament\\Forms\\Form',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'form',
               'type' => 'Filament\\Forms\\Form',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'table',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Filament\\Tables\\Table',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'table',
               'type' => 'Filament\\Tables\\Table',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getRelations',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getPages',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/InvoiceResource/Pages/CreateInvoice.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\InvoiceResource\\Pages\\CreateInvoice',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Pages\\CreateRecord',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'resource',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/InvoiceResource/Pages/EditInvoice.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\InvoiceResource\\Pages\\EditInvoice',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Pages\\EditRecord',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'resource',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getHeaderActions',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/InvoiceResource/Pages/ListInvoices.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\InvoiceResource\\Pages\\ListInvoices',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Pages\\ListRecords',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'resource',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getHeaderActions',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTabs',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/PaymentResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\PaymentResource',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Resource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'navigationIcon',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getNavigationGroup',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'form',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Filament\\Forms\\Form',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'form',
               'type' => 'Filament\\Forms\\Form',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'table',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Filament\\Tables\\Table',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'table',
               'type' => 'Filament\\Tables\\Table',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getRelations',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getPages',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getNavigationBadge',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/PaymentResource/Pages/CreatePayment.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\PaymentResource\\Pages\\CreatePayment',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Pages\\CreateRecord',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'resource',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/PaymentResource/Pages/EditPayment.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\PaymentResource\\Pages\\EditPayment',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Pages\\EditRecord',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'resource',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getHeaderActions',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/PaymentResource/Pages/ListPayments.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\PaymentResource\\Pages\\ListPayments',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Pages\\ListRecords',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'resource',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getHeaderActions',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\ProjectResource',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Resource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'navigationIcon',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'recordTitleAttribute',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getNavigationGroup',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'form',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Filament\\Forms\\Form',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'form',
               'type' => 'Filament\\Forms\\Form',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'table',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Filament\\Tables\\Table',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'table',
               'type' => 'Filament\\Tables\\Table',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getRelations',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getPages',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'infolist',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Filament\\Infolists\\Infolist',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'infolist',
               'type' => 'Filament\\Infolists\\Infolist',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getNavigationBadge',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource/Pages/CreateProject.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\ProjectResource\\Pages\\CreateProject',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Pages\\CreateRecord',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'resource',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource/Pages/EditProject.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\ProjectResource\\Pages\\EditProject',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Pages\\EditRecord',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'resource',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getHeaderActions',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource/Pages/ListProjects.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\ProjectResource\\Pages\\ListProjects',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Pages\\ListRecords',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'resource',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getHeaderActions',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource/Pages/ViewProject.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\ProjectResource\\Pages\\ViewProject',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Pages\\ViewRecord',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'resource',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/ProjectResource/RelationManagers/TaskLogsRelationManager.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\ProjectResource\\RelationManagers\\TaskLogsRelationManager',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\RelationManagers\\RelationManager',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'relationship',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'form',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Filament\\Forms\\Form',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'form',
               'type' => 'Filament\\Forms\\Form',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'table',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Filament\\Tables\\Table',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'table',
               'type' => 'Filament\\Tables\\Table',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/TaskLogResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\TaskLogResource',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Resource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'navigationIcon',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getNavigationGroup',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'form',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Filament\\Forms\\Form',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'form',
               'type' => 'Filament\\Forms\\Form',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'table',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Filament\\Tables\\Table',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'table',
               'type' => 'Filament\\Tables\\Table',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getRelations',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getPages',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'infolist',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Filament\\Infolists\\Infolist',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'infolist',
               'type' => 'Filament\\Infolists\\Infolist',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/TaskLogResource/Pages/CreateTaskLog.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\TaskLogResource\\Pages\\CreateTaskLog',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Pages\\CreateRecord',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'resource',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/TaskLogResource/Pages/EditTaskLog.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\TaskLogResource\\Pages\\EditTaskLog',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Pages\\EditRecord',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'resource',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getHeaderActions',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/TaskLogResource/Pages/ListTaskLogs.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\TaskLogResource\\Pages\\ListTaskLogs',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Pages\\ListRecords',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'resource',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getHeaderActions',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Resources/TaskLogResource/Pages/ViewTaskLog.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Resources\\TaskLogResource\\Pages\\ViewTaskLog',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Resources\\Pages\\ViewRecord',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'resource',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Widgets/ClientsChart.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Widgets\\ClientsChart',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Widgets\\ChartWidget',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'heading',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'pollingInterval',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'color',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'sort',
          ),
           'phpDoc' => NULL,
           'type' => '?int',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getData',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getType',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Widgets/ProjectsChart.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Widgets\\ProjectsChart',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Widgets\\ChartWidget',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'heading',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'pollingInterval',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'sort',
          ),
           'phpDoc' => NULL,
           'type' => '?int',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getData',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getType',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Filament/Widgets/StatsOverview.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Widgets\\StatsOverview',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Widgets\\StatsOverviewWidget',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'sort',
          ),
           'phpDoc' => NULL,
           'type' => '?int',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'pollingInterval',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getStats',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Http/Controllers/Controller.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        1 => 'Illuminate\\Foundation\\Validation\\ValidatesRequests',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Http/Kernel.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Kernel',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\Kernel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'middleware',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The application\'s global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array<int, class-string|string>
     */',
             'namespace' => 'App\\Http',
             'uses' => 
            array (
              'httpkernel' => 'Illuminate\\Foundation\\Http\\Kernel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'middlewareGroups',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The application\'s route middleware groups.
     *
     * @var array<string, array<int, class-string|string>>
     */',
             'namespace' => 'App\\Http',
             'uses' => 
            array (
              'httpkernel' => 'Illuminate\\Foundation\\Http\\Kernel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'middlewareAliases',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The application\'s middleware aliases.
     *
     * Aliases may be used instead of class names to conveniently assign middleware to routes and groups.
     *
     * @var array<string, class-string|string>
     */',
             'namespace' => 'App\\Http',
             'uses' => 
            array (
              'httpkernel' => 'Illuminate\\Foundation\\Http\\Kernel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Http/Middleware/Authenticate.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\Authenticate',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Auth\\Middleware\\Authenticate',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'redirectTo',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Http/Middleware/EncryptCookies.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\EncryptCookies',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Cookie\\Middleware\\EncryptCookies',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'except',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The names of the cookies that should not be encrypted.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Cookie\\Middleware\\EncryptCookies',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Http/Middleware/PreventRequestsDuringMaintenance.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\PreventRequestsDuringMaintenance',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'except',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Http/Middleware/RedirectIfAuthenticated.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\RedirectIfAuthenticated',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming request.
     *
     * @param  \\Closure(\\Illuminate\\Http\\Request): (\\Symfony\\Component\\HttpFoundation\\Response)  $next
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
              'closure' => 'Closure',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'response' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guards',
               'type' => 'string',
               'byRef' => false,
               'variadic' => true,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Http/Middleware/TrimStrings.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\TrimStrings',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\Middleware\\TrimStrings',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'except',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The names of the attributes that should not be trimmed.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Foundation\\Http\\Middleware\\TrimStrings',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Http/Middleware/TrustHosts.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\TrustHosts',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Middleware\\TrustHosts',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'hosts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Http\\Middleware\\TrustHosts',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Http/Middleware/TrustProxies.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\TrustProxies',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Middleware\\TrustProxies',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'proxies',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The trusted proxies for this application.
     *
     * @var array<int, string>|string|null
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Http\\Middleware\\TrustProxies',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'headers',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Http\\Middleware\\TrustProxies',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Http/Middleware/ValidateSignature.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\ValidateSignature',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Routing\\Middleware\\ValidateSignature',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'except',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The names of the query string parameters that should be ignored.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Routing\\Middleware\\ValidateSignature',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Http/Middleware/VerifyCsrfToken.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\VerifyCsrfToken',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'except',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Providers/AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Providers/AuthServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AuthServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\AuthServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'policies',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\AuthServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any authentication / authorization services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\AuthServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Providers/BroadcastServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\BroadcastServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Providers/EventServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\EventServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'observers',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<class-string<\\Illuminate\\Database\\Eloquent\\Model>, array<int, class-string>> */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'invoice' => 'Domain\\Transaction\\Models\\Invoice',
              'invoiceobserver' => 'Domain\\Transaction\\Observers\\InvoiceObserver',
              'registered' => 'Illuminate\\Auth\\Events\\Registered',
              'sendemailverificationnotification' => 'Illuminate\\Auth\\Listeners\\SendEmailVerificationNotification',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'listen',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<class-string, array<int, class-string>> */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'invoice' => 'Domain\\Transaction\\Models\\Invoice',
              'invoiceobserver' => 'Domain\\Transaction\\Observers\\InvoiceObserver',
              'registered' => 'Illuminate\\Auth\\Events\\Registered',
              'sendemailverificationnotification' => 'Illuminate\\Auth\\Listeners\\SendEmailVerificationNotification',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'shouldDiscoverEvents',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Providers/Filament/AdminPanelProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\Filament\\AdminPanelProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\PanelProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'panel',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Filament\\Panel',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'panel',
               'type' => 'Filament\\Panel',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Providers/RouteServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\RouteServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HOME',
               'value' => '\'/home\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The path to your application\'s "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'request' => 'Illuminate\\Http\\Request',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define your route model bindings, pattern filters, and other route configuration.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'request' => 'Illuminate\\Http\\Request',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/app/Settings/GeneralSettings.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Settings\\GeneralSettings',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Spatie\\LaravelSettings\\Settings',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'name',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'address',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'code',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'vat',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'phone',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'group',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/database/factories/ClientFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\ClientFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/** @extends \\Illuminate\\Database\\Eloquent\\Factories\\Factory<\\Domain\\Client\\Models\\Client> */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'client' => 'Domain\\Client\\Models\\Client',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/database/factories/DocumentFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\DocumentFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/** @extends \\Illuminate\\Database\\Eloquent\\Factories\\Factory<\\Domain\\Document\\Models\\Document> */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'document' => 'Domain\\Document\\Models\\Document',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/database/factories/InvoiceFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\InvoiceFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends \\Illuminate\\Database\\Eloquent\\Factories\\Factory<\\Domain\\Transaction\\Models\\Invoice>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'invoicestatus' => 'Domain\\Transaction\\Enums\\InvoiceStatus',
          'invoice' => 'Domain\\Transaction\\Models\\Invoice',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/database/factories/InvoiceItemFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\InvoiceItemFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends \\Illuminate\\Database\\Eloquent\\Factories\\Factory<\\Domain\\Transaction\\Models\\InvoiceItem>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'invoiceitem' => 'Domain\\Transaction\\Models\\InvoiceItem',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/database/factories/ProjectFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\ProjectFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends \\Illuminate\\Database\\Eloquent\\Factories\\Factory<\\Domain\\Project\\Models\\Project>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'project' => 'Domain\\Project\\Models\\Project',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/database/factories/UserFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\UserFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/** @extends \\Illuminate\\Database\\Eloquent\\Factories\\Factory<\\Domain\\User\\Models\\User> */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'user' => 'Domain\\User\\Models\\User',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'password',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'unverified',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/database/seeders/DatabaseSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\DatabaseSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Seed the application\'s database.
     */',
             'namespace' => 'Database\\Seeders',
             'uses' => 
            array (
              'user' => 'Domain\\User\\Models\\User',
              'seeder' => 'Illuminate\\Database\\Seeder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/domain/Client/Models/Client.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Domain\\Client\\Models\\Client',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Domain\\Client\\Models\\Client
 *
 * @property string|null $email
 * @property string $name
 * @property string|null $phone
 * @property string|null $country
 * @property string|null $street
 * @property string|null $city
 * @property string|null $state
 * @property string|null $zip
 * @property-read \\Illuminate\\Database\\Eloquent\\Collection<int, \\Domain\\Document\\Models\\Document>|null $documents
 * @property-read \\Illuminate\\Database\\Eloquent\\Collection<int, \\Domain\\Project\\Models\\Project>|null $projects
 */',
         'namespace' => 'Domain\\Client\\Models',
         'uses' => 
        array (
          'clientfactory' => 'Database\\Factories\\ClientFactory',
          'document' => 'Domain\\Document\\Models\\Document',
          'project' => 'Domain\\Project\\Models\\Project',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<int, string> */',
             'namespace' => 'Domain\\Client\\Models',
             'uses' => 
            array (
              'clientfactory' => 'Database\\Factories\\ClientFactory',
              'document' => 'Domain\\Document\\Models\\Document',
              'project' => 'Domain\\Project\\Models\\Project',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'documents',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany<\\Domain\\Document\\Models\\Document> */',
             'namespace' => 'Domain\\Client\\Models',
             'uses' => 
            array (
              'clientfactory' => 'Database\\Factories\\ClientFactory',
              'document' => 'Domain\\Document\\Models\\Document',
              'project' => 'Domain\\Project\\Models\\Project',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'projects',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany<\\Domain\\Project\\Models\\Project> */',
             'namespace' => 'Domain\\Client\\Models',
             'uses' => 
            array (
              'clientfactory' => 'Database\\Factories\\ClientFactory',
              'document' => 'Domain\\Document\\Models\\Document',
              'project' => 'Domain\\Project\\Models\\Project',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newFactory',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/domain/Document/Models/Document.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Domain\\Document\\Models\\Document',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * \\Domain\\Document\\Models\\Document
 *
 * @property int $client_id
 * @property string $name
 * @property string|null $description
 * @property \\Carbon\\Carbon $date
 * @property-read \\Domain\\Client\\Models\\Client|null $client
 * @property-read \\Spatie\\MediaLibrary\\MediaCollections\\Models\\Collections\\MediaCollection|\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media[] $media
 */',
         'namespace' => 'Domain\\Document\\Models',
         'uses' => 
        array (
          'documentfactory' => 'Database\\Factories\\DocumentFactory',
          'client' => 'Domain\\Client\\Models\\Client',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'hasmedia' => 'Spatie\\MediaLibrary\\HasMedia',
          'interactswithmedia' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
        0 => 'Spatie\\MediaLibrary\\HasMedia',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Spatie\\MediaLibrary\\InteractsWithMedia',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<int, string> */',
             'namespace' => 'Domain\\Document\\Models',
             'uses' => 
            array (
              'documentfactory' => 'Database\\Factories\\DocumentFactory',
              'client' => 'Domain\\Client\\Models\\Client',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'hasmedia' => 'Spatie\\MediaLibrary\\HasMedia',
              'interactswithmedia' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<string, string> */',
             'namespace' => 'Domain\\Document\\Models',
             'uses' => 
            array (
              'documentfactory' => 'Database\\Factories\\DocumentFactory',
              'client' => 'Domain\\Client\\Models\\Client',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'hasmedia' => 'Spatie\\MediaLibrary\\HasMedia',
              'interactswithmedia' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'registerMediaCollections',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'client',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo<\\Domain\\Client\\Models\\Client, \\Domain\\Document\\Models\\Document> */',
             'namespace' => 'Domain\\Document\\Models',
             'uses' => 
            array (
              'documentfactory' => 'Database\\Factories\\DocumentFactory',
              'client' => 'Domain\\Client\\Models\\Client',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'hasmedia' => 'Spatie\\MediaLibrary\\HasMedia',
              'interactswithmedia' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newFactory',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/domain/Project/Actions/GetCurrencyOptionsAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Domain\\Project\\Actions\\GetCurrencyOptionsAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/domain/Project/Models/Project.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Domain\\Project\\Models\\Project',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * \\Domain\\Project\\Models\\Project
 *
 * @property int $client_id
 * @property string $name
 * @property string|null $description
 * @property string $currency
 * @property float $hourly_rate
 * @property-read \\Domain\\Client\\Models\\Client $client
 * @property-read \\Illuminate\\Database\\Eloquent\\Collection<int, \\Domain\\Project\\Models\\TaskLog>|null $taskLogs
 */',
         'namespace' => 'Domain\\Project\\Models',
         'uses' => 
        array (
          'moneycast' => 'App\\Casts\\MoneyCast',
          'projectfactory' => 'Database\\Factories\\ProjectFactory',
          'client' => 'Domain\\Client\\Models\\Client',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<int, string> */',
             'namespace' => 'Domain\\Project\\Models',
             'uses' => 
            array (
              'moneycast' => 'App\\Casts\\MoneyCast',
              'projectfactory' => 'Database\\Factories\\ProjectFactory',
              'client' => 'Domain\\Client\\Models\\Client',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<string, string> */',
             'namespace' => 'Domain\\Project\\Models',
             'uses' => 
            array (
              'moneycast' => 'App\\Casts\\MoneyCast',
              'projectfactory' => 'Database\\Factories\\ProjectFactory',
              'client' => 'Domain\\Client\\Models\\Client',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'client',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo<\\Domain\\Client\\Models\\Client, \\Domain\\Project\\Models\\Project> */',
             'namespace' => 'Domain\\Project\\Models',
             'uses' => 
            array (
              'moneycast' => 'App\\Casts\\MoneyCast',
              'projectfactory' => 'Database\\Factories\\ProjectFactory',
              'client' => 'Domain\\Client\\Models\\Client',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'taskLogs',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany<\\Domain\\Project\\Models\\TaskLog> */',
             'namespace' => 'Domain\\Project\\Models',
             'uses' => 
            array (
              'moneycast' => 'App\\Casts\\MoneyCast',
              'projectfactory' => 'Database\\Factories\\ProjectFactory',
              'client' => 'Domain\\Client\\Models\\Client',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newFactory',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/domain/Project/Models/TaskLog.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Domain\\Project\\Models\\TaskLog',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Domain\\Project\\Models\\TaskLog
 *
 * @property int $project_id
 * @property int $hours
 * @property \\Carbon\\Carbon $date_accomplished
 * @property string $description
 * @property-read \\Domain\\Project\\Models\\Project $project
 */',
         'namespace' => 'Domain\\Project\\Models',
         'uses' => 
        array (
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<int, string> */',
             'namespace' => 'Domain\\Project\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<string, string> */',
             'namespace' => 'Domain\\Project\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'project',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo<\\Domain\\Project\\Models\\Project, \\Domain\\Project\\Models\\TaskLog> */',
             'namespace' => 'Domain\\Project\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/domain/Transaction/Actions/CalculateTotalPriceAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Domain\\Transaction\\Actions\\CalculateTotalPriceAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'float',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'invoiceItems',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/domain/Transaction/Actions/CalculateTotalQuantityAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Domain\\Transaction\\Actions\\CalculateTotalQuantityAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'float',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'invoiceItems',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/domain/Transaction/Actions/ExportInvoiceAsPdfAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Domain\\Transaction\\Actions\\ExportInvoiceAsPdfAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'settings',
               'type' => 'App\\Settings\\GeneralSettings',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'mixed',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'invoice',
               'type' => 'Domain\\Transaction\\Models\\Invoice',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/domain/Transaction/Actions/GenerateInvoiceNumberAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Domain\\Transaction\\Actions\\GenerateInvoiceNumberAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/domain/Transaction/DataTransferObjects/InvoiceItemData.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Domain\\Transaction\\DataTransferObjects\\InvoiceItemData',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'title',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'price_per_unit',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'quantity',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/domain/Transaction/Enums/InvoiceStatus.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'Domain\\Transaction\\Enums\\InvoiceStatus',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'DRAFT',
           'value' => '\'draft\'',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'SENT',
           'value' => '\'sent\'',
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'PENDING',
           'value' => '\'pending\'',
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'PAID',
           'value' => '\'paid\'',
           'phpDoc' => NULL,
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'PARTIAL_PAYMENT',
           'value' => '\'partial payment\'',
           'phpDoc' => NULL,
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'CANCELLED',
           'value' => '\'cancelled\'',
           'phpDoc' => NULL,
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'REFUNDED',
           'value' => '\'refunded\'',
           'phpDoc' => NULL,
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/domain/Transaction/Enums/PaymentType.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'Domain\\Transaction\\Enums\\PaymentType',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'ONLINE',
           'value' => '\'online\'',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'BANK_TRANSFER',
           'value' => '\'bank transfer\'',
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'CASH',
           'value' => '\'cash\'',
           'phpDoc' => NULL,
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/domain/Transaction/Models/Invoice.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Domain\\Transaction\\Models\\Invoice',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * \\Domain\\Transaction\\Models\\Invoice
 *
 * @property int $reference
 * @property int $client_id
 * @property string $status
 * @property \\Carbon\\Carbon $date
 * @property float $vat_rate
 * @property float $discount_by_percent
 * @property float $shipping_costs
 * @property float $total_price
 * @property-read \\Domain\\Client\\Models\\Client $client
 * @property-read \\Illuminate\\Database\\Eloquent\\Collection<int, \\Domain\\Transaction\\Models\\InvoiceItem> $invoiceItems
 *
 * @method static \\Domain\\Transaction\\QueryBuilders\\InvoiceEloquentQueryBuilder|\\Domain\\Transaction\\Models\\Invoice whereDrafted()
 * @method static \\Domain\\Transaction\\QueryBuilders\\InvoiceEloquentQueryBuilder|\\Domain\\Transaction\\Models\\Invoice whereSent()
 * @method static \\Domain\\Transaction\\QueryBuilders\\InvoiceEloquentQueryBuilder|\\Domain\\Transaction\\Models\\Invoice wherePending()
 * @method static \\Domain\\Transaction\\QueryBuilders\\InvoiceEloquentQueryBuilder|\\Domain\\Transaction\\Models\\Invoice wherePaid()
 * @method static \\Domain\\Transaction\\QueryBuilders\\InvoiceEloquentQueryBuilder|\\Domain\\Transaction\\Models\\Invoice wherePartiallyPaid()
 * @method static \\Domain\\Transaction\\QueryBuilders\\InvoiceEloquentQueryBuilder|\\Domain\\Transaction\\Models\\Invoice whereCancelled()
 * @method static \\Domain\\Transaction\\QueryBuilders\\InvoiceEloquentQueryBuilder|\\Domain\\Transaction\\Models\\Invoice whereRefunded()
 */',
         'namespace' => 'Domain\\Transaction\\Models',
         'uses' => 
        array (
          'moneycast' => 'App\\Casts\\MoneyCast',
          'invoicefactory' => 'Database\\Factories\\InvoiceFactory',
          'client' => 'Domain\\Client\\Models\\Client',
          'invoiceeloquentquerybuilder' => 'Domain\\Transaction\\QueryBuilders\\InvoiceEloquentQueryBuilder',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<int, string> */',
             'namespace' => 'Domain\\Transaction\\Models',
             'uses' => 
            array (
              'moneycast' => 'App\\Casts\\MoneyCast',
              'invoicefactory' => 'Database\\Factories\\InvoiceFactory',
              'client' => 'Domain\\Client\\Models\\Client',
              'invoiceeloquentquerybuilder' => 'Domain\\Transaction\\QueryBuilders\\InvoiceEloquentQueryBuilder',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<string, string> */',
             'namespace' => 'Domain\\Transaction\\Models',
             'uses' => 
            array (
              'moneycast' => 'App\\Casts\\MoneyCast',
              'invoicefactory' => 'Database\\Factories\\InvoiceFactory',
              'client' => 'Domain\\Client\\Models\\Client',
              'invoiceeloquentquerybuilder' => 'Domain\\Transaction\\QueryBuilders\\InvoiceEloquentQueryBuilder',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'client',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo<\\Domain\\Client\\Models\\Client, \\Domain\\Transaction\\Models\\Invoice> */',
             'namespace' => 'Domain\\Transaction\\Models',
             'uses' => 
            array (
              'moneycast' => 'App\\Casts\\MoneyCast',
              'invoicefactory' => 'Database\\Factories\\InvoiceFactory',
              'client' => 'Domain\\Client\\Models\\Client',
              'invoiceeloquentquerybuilder' => 'Domain\\Transaction\\QueryBuilders\\InvoiceEloquentQueryBuilder',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'invoiceItems',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany<\\Domain\\Transaction\\Models\\InvoiceItem> */',
             'namespace' => 'Domain\\Transaction\\Models',
             'uses' => 
            array (
              'moneycast' => 'App\\Casts\\MoneyCast',
              'invoicefactory' => 'Database\\Factories\\InvoiceFactory',
              'client' => 'Domain\\Client\\Models\\Client',
              'invoiceeloquentquerybuilder' => 'Domain\\Transaction\\QueryBuilders\\InvoiceEloquentQueryBuilder',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newEloquentBuilder',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Domain\\Transaction\\QueryBuilders\\InvoiceEloquentQueryBuilder',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newFactory',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/domain/Transaction/Models/InvoiceItem.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Domain\\Transaction\\Models\\InvoiceItem',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * \\Domain\\Transaction\\Models\\InvoiceItem
 *
 * @property int $invoice_id
 * @property string $title
 * @property float $price_per_unit
 * @property int $quantity
 */',
         'namespace' => 'Domain\\Transaction\\Models',
         'uses' => 
        array (
          'moneycast' => 'App\\Casts\\MoneyCast',
          'invoiceitemfactory' => 'Database\\Factories\\InvoiceItemFactory',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<int, string> */',
             'namespace' => 'Domain\\Transaction\\Models',
             'uses' => 
            array (
              'moneycast' => 'App\\Casts\\MoneyCast',
              'invoiceitemfactory' => 'Database\\Factories\\InvoiceItemFactory',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<string, string> */',
             'namespace' => 'Domain\\Transaction\\Models',
             'uses' => 
            array (
              'moneycast' => 'App\\Casts\\MoneyCast',
              'invoiceitemfactory' => 'Database\\Factories\\InvoiceItemFactory',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'invoice',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo<\\Domain\\Transaction\\Models\\Invoice, \\Domain\\Transaction\\Models\\InvoiceItem> */',
             'namespace' => 'Domain\\Transaction\\Models',
             'uses' => 
            array (
              'moneycast' => 'App\\Casts\\MoneyCast',
              'invoiceitemfactory' => 'Database\\Factories\\InvoiceItemFactory',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newFactory',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/domain/Transaction/Models/Payment.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Domain\\Transaction\\Models\\Payment',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * \\Domain\\Transaction\\Models\\Payment
 *
 * @property int $client_id
 * @property int $invoice_id
 * @property string $name
 * @property string $account_number
 * @property string $reference_number
 * @property \\Carbon\\Carbon $date
 * @property string $type
 * @property string $currency
 * @property float $amount
 * @property string $notes
 * @property-read \\Domain\\Client\\Models\\Client|null $client
 * @property-read \\Domain\\Transaction\\Models\\Invoice|null $invoice
 */',
         'namespace' => 'Domain\\Transaction\\Models',
         'uses' => 
        array (
          'moneycast' => 'App\\Casts\\MoneyCast',
          'client' => 'Domain\\Client\\Models\\Client',
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<int, string> */',
             'namespace' => 'Domain\\Transaction\\Models',
             'uses' => 
            array (
              'moneycast' => 'App\\Casts\\MoneyCast',
              'client' => 'Domain\\Client\\Models\\Client',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<string, string> */',
             'namespace' => 'Domain\\Transaction\\Models',
             'uses' => 
            array (
              'moneycast' => 'App\\Casts\\MoneyCast',
              'client' => 'Domain\\Client\\Models\\Client',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'client',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo<\\Domain\\Client\\Models\\Client, \\Domain\\Transaction\\Models\\Payment> */',
             'namespace' => 'Domain\\Transaction\\Models',
             'uses' => 
            array (
              'moneycast' => 'App\\Casts\\MoneyCast',
              'client' => 'Domain\\Client\\Models\\Client',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'invoice',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo<\\Domain\\Transaction\\Models\\Invoice, \\Domain\\Transaction\\Models\\Payment> */',
             'namespace' => 'Domain\\Transaction\\Models',
             'uses' => 
            array (
              'moneycast' => 'App\\Casts\\MoneyCast',
              'client' => 'Domain\\Client\\Models\\Client',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/domain/Transaction/Observers/InvoiceObserver.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Domain\\Transaction\\Observers\\InvoiceObserver',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'creating',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'invoice',
               'type' => 'Domain\\Transaction\\Models\\Invoice',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/domain/Transaction/QueryBuilders/InvoiceEloquentQueryBuilder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Domain\\Transaction\\QueryBuilders\\InvoiceEloquentQueryBuilder',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/** @extends \\Illuminate\\Database\\Eloquent\\Builder<\\Domain\\Transaction\\Models\\Invoice> */',
         'namespace' => 'Domain\\Transaction\\QueryBuilders',
         'uses' => 
        array (
          'invoicestatus' => 'Domain\\Transaction\\Enums\\InvoiceStatus',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Builder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'whereDrafted',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'whereSent',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'wherePending',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'wherePaid',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'wherePartiallyPaid',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'whereCancelled',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'whereRefunded',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/domain/User/Enums/KanbanBoardStatus.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'Domain\\User\\Enums\\KanbanBoardStatus',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'PENDING',
           'value' => '\'pending\'',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'INPROGRESS',
           'value' => '\'in progress\'',
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'APPROVED',
           'value' => '\'approved\'',
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'REJECTED',
           'value' => '\'rejected\'',
           'phpDoc' => NULL,
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'COMPLETED',
           'value' => '\'completed\'',
           'phpDoc' => NULL,
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/domain/User/Models/Item.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Domain\\User\\Models\\Item',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Domain\\User\\Models\\Item
 *
 * @property string $title
 * @property string $description
 * @property string $status
 * @property int $order
 * @property \\Carbon\\Carbon $created_at
 *
 * @method static \\Illuminate\\Database\\Eloquent\\Builder whereDate($column, $value)
 */',
         'namespace' => 'Domain\\User\\Models',
         'uses' => 
        array (
          'kanbanboardstatus' => 'Domain\\User\\Enums\\KanbanBoardStatus',
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'sortable' => 'Spatie\\EloquentSortable\\Sortable',
          'sortabletrait' => 'Spatie\\EloquentSortable\\SortableTrait',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
        0 => 'Spatie\\EloquentSortable\\Sortable',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Spatie\\EloquentSortable\\SortableTrait',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<int, string> */',
             'namespace' => 'Domain\\User\\Models',
             'uses' => 
            array (
              'kanbanboardstatus' => 'Domain\\User\\Enums\\KanbanBoardStatus',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'sortable' => 'Spatie\\EloquentSortable\\Sortable',
              'sortabletrait' => 'Spatie\\EloquentSortable\\SortableTrait',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<string, string> */',
             'namespace' => 'Domain\\User\\Models',
             'uses' => 
            array (
              'kanbanboardstatus' => 'Domain\\User\\Enums\\KanbanBoardStatus',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'sortable' => 'Spatie\\EloquentSortable\\Sortable',
              'sortabletrait' => 'Spatie\\EloquentSortable\\SortableTrait',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'sortable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<string, mixed> */',
             'namespace' => 'Domain\\User\\Models',
             'uses' => 
            array (
              'kanbanboardstatus' => 'Domain\\User\\Enums\\KanbanBoardStatus',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'sortable' => 'Spatie\\EloquentSortable\\Sortable',
              'sortabletrait' => 'Spatie\\EloquentSortable\\SortableTrait',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/vagrant/code/project-crafter/domain/User/Models/User.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Domain\\User\\Models\\User',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Domain\\User\\Models\\User
 *
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property string|null $email_verified_at
 */',
         'namespace' => 'Domain\\User\\Models',
         'uses' => 
        array (
          'userfactory' => 'Database\\Factories\\UserFactory',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
          'notifiable' => 'Illuminate\\Notifications\\Notifiable',
          'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Laravel\\Sanctum\\HasApiTokens',
        1 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        2 => 'Illuminate\\Notifications\\Notifiable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<int, string> */',
             'namespace' => 'Domain\\User\\Models',
             'uses' => 
            array (
              'userfactory' => 'Database\\Factories\\UserFactory',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hidden',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<int, string> */',
             'namespace' => 'Domain\\User\\Models',
             'uses' => 
            array (
              'userfactory' => 'Database\\Factories\\UserFactory',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<string, string> */',
             'namespace' => 'Domain\\User\\Models',
             'uses' => 
            array (
              'userfactory' => 'Database\\Factories\\UserFactory',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newFactory',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
