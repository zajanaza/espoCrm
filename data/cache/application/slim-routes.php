<?php return array (
  0 => 
  array (
    'GET' => 
    array (
      '/espoCrm/api/v1/Activities/upcoming' => 'route2',
      '/espoCrm/api/v1/Activities' => 'route3',
      '/espoCrm/api/v1/Timeline' => 'route4',
      '/espoCrm/api/v1/Timeline/busyRanges' => 'route5',
      '/espoCrm/api/v1/' => 'route9',
      '/espoCrm/api/v1/App/user' => 'route10',
      '/espoCrm/api/v1/App/about' => 'route12',
      '/espoCrm/api/v1/Metadata' => 'route13',
      '/espoCrm/api/v1/I18n' => 'route14',
      '/espoCrm/api/v1/Settings' => 'route15',
      '/espoCrm/api/v1/Stream' => 'route18',
      '/espoCrm/api/v1/GlobalSearch' => 'route19',
      '/espoCrm/api/v1/Admin/jobs' => 'route30',
      '/espoCrm/api/v1/CurrencyRate' => 'route36',
      '/espoCrm/api/v1/Email/inbox/notReadCounts' => 'route67',
      '/espoCrm/api/v1/Email/insertFieldData' => 'route68',
      '/espoCrm/api/v1/EmailAddress/search' => 'route69',
      '/espoCrm/api/v1/Oidc/authorizationData' => 'route77',
    ),
    'POST' => 
    array (
      '/espoCrm/api/v1/App/destroyAuthToken' => 'route11',
      '/espoCrm/api/v1/Admin/rebuild' => 'route28',
      '/espoCrm/api/v1/Admin/clearCache' => 'route29',
      '/espoCrm/api/v1/Action' => 'route38',
      '/espoCrm/api/v1/MassAction' => 'route39',
      '/espoCrm/api/v1/Export' => 'route42',
      '/espoCrm/api/v1/Import' => 'route45',
      '/espoCrm/api/v1/Import/file' => 'route46',
      '/espoCrm/api/v1/Attachment/fromImageUrl' => 'route55',
      '/espoCrm/api/v1/Email/sendTest' => 'route59',
      '/espoCrm/api/v1/Email/inbox/read' => 'route60',
      '/espoCrm/api/v1/Email/inbox/important' => 'route62',
      '/espoCrm/api/v1/Email/inbox/inTrash' => 'route64',
      '/espoCrm/api/v1/UserSecurity/apiKey/generate' => 'route71',
      '/espoCrm/api/v1/UserSecurity/password/recovery' => 'route73',
      '/espoCrm/api/v1/UserSecurity/password/generate' => 'route74',
      '/espoCrm/api/v1/User/passwordChangeRequest' => 'route75',
      '/espoCrm/api/v1/User/changePasswordByRequest' => 'route76',
      '/espoCrm/api/v1/Oidc/backchannelLogout' => 'route78',
    ),
    'PATCH' => 
    array (
      '/espoCrm/api/v1/Settings' => 'route16',
    ),
    'PUT' => 
    array (
      '/espoCrm/api/v1/Settings' => 'route17',
      '/espoCrm/api/v1/CurrencyRate' => 'route37',
      '/espoCrm/api/v1/Kanban/order' => 'route51',
      '/espoCrm/api/v1/UserSecurity/password' => 'route72',
    ),
    'DELETE' => 
    array (
      '/espoCrm/api/v1/Email/inbox/read' => 'route61',
      '/espoCrm/api/v1/Email/inbox/important' => 'route63',
      '/espoCrm/api/v1/Email/inbox/inTrash' => 'route65',
    ),
  ),
  1 => 
  array (
    'GET' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/espoCrm/api/v1/Activities/([^/]+)/([^/]+)/([^/]+)|/espoCrm/api/v1/Activities/([^/]+)/([^/]+)/([^/]+)/list/([^/]+)|/espoCrm/api/v1/Meeting/([^/]+)/attendees()()()()|/espoCrm/api/v1/Call/([^/]+)/attendees()()()()()|/espoCrm/api/v1/([^/]+)/action/([^/]+)()()()()()|/espoCrm/api/v1/([^/]+)/layout/([^/]+)()()()()()()|/espoCrm/api/v1/Admin/fieldManager/([^/]+)/([^/]+)()()()()()()()|/espoCrm/api/v1/MassAction/([^/]+)/status()()()()()()()()()|/espoCrm/api/v1/Export/([^/]+)/status()()()()()()()()()())$~',
        'routeMap' => 
        array (
          4 => 
          array (
            0 => 'route0',
            1 => 
            array (
              'parentType' => 'parentType',
              'id' => 'id',
              'type' => 'type',
            ),
          ),
          5 => 
          array (
            0 => 'route1',
            1 => 
            array (
              'parentType' => 'parentType',
              'id' => 'id',
              'type' => 'type',
              'targetType' => 'targetType',
            ),
          ),
          6 => 
          array (
            0 => 'route6',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route7',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route24',
            1 => 
            array (
              'controller' => 'controller',
              'action' => 'action',
            ),
          ),
          9 => 
          array (
            0 => 'route25',
            1 => 
            array (
              'controller' => 'controller',
              'name' => 'name',
            ),
          ),
          10 => 
          array (
            0 => 'route31',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          11 => 
          array (
            0 => 'route40',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          12 => 
          array (
            0 => 'route43',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'regex' => '~^(?|/espoCrm/api/v1/Kanban/([^/]+)|/espoCrm/api/v1/Attachment/file/([^/]+)()|/espoCrm/api/v1/User/([^/]+)/acl()()|/espoCrm/api/v1/([^/]+)/([^/]+)()()|/espoCrm/api/v1/([^/]+)()()()()|/espoCrm/api/v1/([^/]+)/([^/]+)/stream()()()()|/espoCrm/api/v1/([^/]+)/([^/]+)/posts()()()()()|/espoCrm/api/v1/([^/]+)/([^/]+)/([^/]+)()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route52',
            1 => 
            array (
              'entityType' => 'entityType',
            ),
          ),
          3 => 
          array (
            0 => 'route53',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route70',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route79',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route80',
            1 => 
            array (
              'controller' => 'controller',
            ),
          ),
          7 => 
          array (
            0 => 'route85',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route86',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route89',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
              'link' => 'link',
            ),
          ),
        ),
      ),
    ),
    'POST' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/espoCrm/api/v1/Campaign/([^/]+)/generateMailMerge|/espoCrm/api/v1/LeadCapture/([^/]+)()|/espoCrm/api/v1/([^/]+)/action/([^/]+)()|/espoCrm/api/v1/Admin/fieldManager/([^/]+)()()()|/espoCrm/api/v1/MassAction/([^/]+)/subscribe()()()()|/espoCrm/api/v1/Export/([^/]+)/subscribe()()()()()|/espoCrm/api/v1/Import/([^/]+)/revert()()()()()()|/espoCrm/api/v1/Import/([^/]+)/removeDuplicates()()()()()()()|/espoCrm/api/v1/Import/([^/]+)/unmarkDuplicates()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route8',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'route20',
            1 => 
            array (
              'apiKey' => 'apiKey',
            ),
          ),
          4 => 
          array (
            0 => 'route22',
            1 => 
            array (
              'controller' => 'controller',
              'action' => 'action',
            ),
          ),
          5 => 
          array (
            0 => 'route32',
            1 => 
            array (
              'scope' => 'scope',
            ),
          ),
          6 => 
          array (
            0 => 'route41',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route44',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route47',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route48',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'route49',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'regex' => '~^(?|/espoCrm/api/v1/Import/([^/]+)/exportErrors|/espoCrm/api/v1/Attachment/chunk/([^/]+)()|/espoCrm/api/v1/Attachment/copy/([^/]+)()()|/espoCrm/api/v1/EmailTemplate/([^/]+)/prepare()()()|/espoCrm/api/v1/Email/([^/]+)/attachments/copy()()()()|/espoCrm/api/v1/Email/inbox/folders/([^/]+)()()()()()|/espoCrm/api/v1/([^/]+)()()()()()()|/espoCrm/api/v1/([^/]+)/([^/]+)/([^/]+)()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route50',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'route54',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route56',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route57',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route58',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route66',
            1 => 
            array (
              'folderId' => 'folderId',
            ),
          ),
          8 => 
          array (
            0 => 'route81',
            1 => 
            array (
              'controller' => 'controller',
            ),
          ),
          9 => 
          array (
            0 => 'route90',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
              'link' => 'link',
            ),
          ),
        ),
      ),
    ),
    'OPTIONS' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/espoCrm/api/v1/LeadCapture/([^/]+))$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route21',
            1 => 
            array (
              'apiKey' => 'apiKey',
            ),
          ),
        ),
      ),
    ),
    'PUT' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/espoCrm/api/v1/([^/]+)/action/([^/]+)|/espoCrm/api/v1/([^/]+)/layout/([^/]+)()|/espoCrm/api/v1/([^/]+)/layout/([^/]+)/([^/]+)()|/espoCrm/api/v1/Admin/fieldManager/([^/]+)/([^/]+)()()()|/espoCrm/api/v1/([^/]+)/([^/]+)()()()()|/espoCrm/api/v1/([^/]+)/([^/]+)/subscription()()()()())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route23',
            1 => 
            array (
              'controller' => 'controller',
              'action' => 'action',
            ),
          ),
          4 => 
          array (
            0 => 'route26',
            1 => 
            array (
              'controller' => 'controller',
              'name' => 'name',
            ),
          ),
          5 => 
          array (
            0 => 'route27',
            1 => 
            array (
              'controller' => 'controller',
              'name' => 'name',
              'setId' => 'setId',
            ),
          ),
          6 => 
          array (
            0 => 'route33',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          7 => 
          array (
            0 => 'route82',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route87',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
        ),
      ),
    ),
    'PATCH' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/espoCrm/api/v1/Admin/fieldManager/([^/]+)/([^/]+)|/espoCrm/api/v1/([^/]+)/([^/]+)())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route34',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          4 => 
          array (
            0 => 'route83',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
        ),
      ),
    ),
    'DELETE' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/espoCrm/api/v1/Admin/fieldManager/([^/]+)/([^/]+)|/espoCrm/api/v1/([^/]+)/([^/]+)()|/espoCrm/api/v1/([^/]+)/([^/]+)/subscription()()|/espoCrm/api/v1/([^/]+)/([^/]+)/([^/]+)()())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route35',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          4 => 
          array (
            0 => 'route84',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route88',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route91',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
              'link' => 'link',
            ),
          ),
        ),
      ),
    ),
  ),
);