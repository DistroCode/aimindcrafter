<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C4qXGVS0d154vf5x',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FpgXMWE0qwPSg26Y',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9A6ZyapqqL1eWP56',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register/subscriber' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register.subscriber',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register/subscriber/plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register.subscriber.plans',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register/subscriber/payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register.subscriber.payment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UZhPQbfjYIXDHIBv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login/2fa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login.2fa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'login.2fa.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verify-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.notice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/verification-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verify-email/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::80z6UNWtfm7N9SLa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/confirm-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RRNEGHwiRgEo3PaJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7Exzc1Jasyd7pNZe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'contact.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/terms-and-conditions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'terms',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/privacy-policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/unsubscribe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'email.unsubscribe.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/webhooks/stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qY9r7HH8ZMaNauFf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/webhooks/paypal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kR1t8ZCsMjLuuat9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/webhooks/paystack' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qqa534UG10eN6lmS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/webhooks/razorpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TLViVPM8eASDs97g',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/webhooks/mollie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mollie.webhook',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/webhooks/coinbase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oO2zs7vxbGmLO01i',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/webhooks/flutterwave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KU9ui4jCms5thNCK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/webhooks/yookassa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::10jq1twCJAnzeoSN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/webhooks/paddle' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y4nMtAyETtpzRVRO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/webhooks/midtrans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cbRYyz83oef6YFvO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/requirements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.requirements',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.permissions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/database' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.database',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'install.database.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/activation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.activation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'install.activation.activate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/update/now' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BZP9wRCEjHNQYteF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.templates',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/templates/template/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RDfuapdflnka93tm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/templates/template/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TqziePBs75qNwgGL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/templates/template/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u4ekCpNfAijs6L9u',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/templates/template/changepackage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::802nBCKgEzaWOFdD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/templates/template/setnew' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YqEOBm8j1veVgqu6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/templates/template/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ProS3vDZ9LhbgFwz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/templates/activate/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VH7JCZeumAbP2ET4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/templates/deactivate/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cAOJbHC83C64LBKX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/configs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.configs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.configs.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/configs/api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.configs.store.api',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/configs/extended' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.configs.store.extended',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/configs/keys' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.configs.keys',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/configs/keys/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.configs.keys.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/configs/keys/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.configs.keys.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/configs/fine-tune' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.configs.fine-tune',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.configs.fine-tune.create',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/configs/fine-tune/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iMh72DdVQdA3tQD0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/configs/keys/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cqky23fM9EhwNJox',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/configs/keys/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EmaIoZARYzzCSFXc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/configs/keys/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gV6Rb5vwCFz6j9Uo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/custom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.custom',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.custom.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.custom.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/custom/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.custom.category',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/custom/category/change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cWoXqiFFeSPIno4R',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/custom/category/description' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mxcnV4tRntBrZ4ES',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/custom/category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gJX4jxnNJrTcIXMh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/custom/category/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ycV1lZo8bXCxm8ne',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/text-to-speech/voices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.voices',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/text-to-speech/voices/avatar/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MljqTP62f5qhIqx5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/text-to-speech/voice/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b5vSA8wniOpWmjlN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/text-to-speech/voices/voice/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IduqIc97O20sNSsc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/text-to-speech/voices/voice/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gQ4FCYzIrsbGDPyI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/text-to-speech/voices/activate/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pTkCrqcR3ySxRBoQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/text-to-speech/voices/deactivate/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pqQG8a2aO88bdQjS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chats',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/avatar/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0I28HKScGXoq8eZI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7o2jgxQSfahjw1ig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WBtGZ6UrZpQM1yvT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ISjexFvW3SE621ho',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chat.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chat.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chat.category',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/category/change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wm7nQMTFnZsuVJI7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GfdPR5X6NQOrh8dK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/category/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Jz3a17AkthJIhVbx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/prompt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chat.prompt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/prompt/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chat.prompt.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/prompt/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chat.prompt.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/prompt/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l94ndPDFlLXHZXAe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/prompt/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zcDmVPFblDaAMoNP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/prompt/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Jr7eIwAOgwfPFoEI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chat/assistant' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.chat.assistant',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.chat.assistant.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chat/assistant/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.chat.assistant.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chat/assistant/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AbKQVgyd1hLM3vIa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chat/assistant/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3pmaqhwM09KLdJzF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chat/assistant/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NaTryRPu5wjEK5r9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chat/training' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.chat.training',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.chat.training.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chat/training/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qYXTt1Eq7t0a4u5s',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chat/training/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FaILWAAqRnwMerzd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chat/training/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yu2cSxPbvQL1xpdO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/image/prompt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.image.prompt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/image/prompt/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.image.prompt.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/image/prompt/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.image.prompt.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/image/prompt/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6xnPhwsyooVCtcOq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/image/prompt/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w0wzV3QBLw36pcV0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/image/prompt/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x9z3bIYKetxA9GEI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/studio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.studio',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/studio/music' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.studio.music',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/studio/music/public' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oRHoF4P4UMuUoELA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/studio/music/private' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BlKOvVFVumIHauX6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/studio/music/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DAwpWxepUaU6cFqZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/studio/music/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s7QIHujo6j0L0qRl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/studio/music/result/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8QhSbRVsjq2XgEUu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/activity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.activity',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.transactions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/transaction/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Lc3FUlN9FOMdSi28',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.subscriptions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/subscriptions/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.stop.subscription',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.plans',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.plan.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/plan/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.plan.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/plan/subscription/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pRXTY3sKJp1lqBEe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/prepaid' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.prepaid',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.prepaid.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/prepaid/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.prepaid.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/promocodes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/promocodes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/referral/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.settings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/referral/payouts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.payouts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/referral/top' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.top',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/invoice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.invoice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.invoice.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.settings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/support' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/support/response' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.response',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/support/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1Psl94rXrxlCHS1E',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notifications/sytem' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.system',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notifications/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notifications/mark-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.markAllRead',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notifications/delete-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.deleteAll',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notifications/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AdrEsPxdwHp8rJpW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email/templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.templates',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email/newsletter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.newsletter',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.newsletter.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email/newsletter/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.newsletter.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/global' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.global',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.global.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/smtp/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.smtp.test',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/smtp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.smtp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.smtp.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/registration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.registration',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.registration.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/oauth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.oauth',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.oauth.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/activation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.activation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.activation.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/activation/destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Gd7tHVF52Z0ftJ1w',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/activation/manual' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.activation.manual',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.activation.manual.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/appearance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.appearance',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.appearance.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/frontend' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.frontend',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.frontend.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/steps' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.step',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/steps/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.step.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.step.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/tools' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.tool',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/tools/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.tool.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/tools/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.tool.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/features' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.feature',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/features/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.feature.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/features/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.feature.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.blog',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.blog.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/blog/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.blog.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/blog/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bRtf0kWAwPejuThq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.faq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.faq.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/faq/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.faq.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/faq/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5hRr5YvOVwgXLKjS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/review' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.review',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.review.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/review/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.review.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/review/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::maGy82TdvSSqctu1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/adsense' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.adsense',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/terms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.terms',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.terms.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.about',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.about.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/upgrade' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.upgrade',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.upgrade.start',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.clear',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/clear/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.clear.cache',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/clear/symlink' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.clear.symlink',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/dashboard/favorite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YojTwmxOT6HrOqgw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/dashboard/favoritecustom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NWS9NbPY0Q5CYeFy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.templates',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/templates/original-template/generate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cb8Dme0n9akyMHFw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/templates/original-template/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zcm6NpRU4uM2WAEu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/templates/custom-template/customGenerate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RLBfKRLM1U8srPP1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/templates/custom-template/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::edYVnmXlyTzbl4yY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/templates/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Siv6GukMbTXoLU7J',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/templates/brand' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Axfp2P9AylOPYy5q',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/templates/original-template/favorite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5fOVanQU5MAhxwnc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/templates/original-template/favoritecustom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OZN7CbdXPj1PNLNo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/templates/custom-template/favorite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ps4XR8XdHEEIl4cY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/templates/custom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.templates.custom',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.templates.custom.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/templates/custom/template/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fHQ0iTdpa40sBxHL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/templates/custom/template/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WDdKGqHhx5XAzEXy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/templates/custom/template/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jaW6qEpc7by7Z01i',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/custom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.chat.custom',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.chat.custom.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/custom/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r9Leq0EWrM22iHWF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/custom/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S3bSLw7bBHRELoSY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/custom/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yQg5Zj2rescBIrdT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/smart-editor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.smart.editor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/smart-editor/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kgEULAiLJ7T9JseL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/smart-editor/generate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IMkrvXGE05nSKs0a',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/smart-editor/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GVe9hs5ESI9bzW4m',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/smart-editor/custom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::22vgl16glKOWxcax',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/smart-editor/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XfxNhAKYYI9g9swt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/smart-editor/favorite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NBljgPYVDR1ZJ4oe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/smart-editor/wordpress' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qoe3OYaqXdY9uzrZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/rewriter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.rewriter',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/rewriter/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vVl4pU7SLjRVlmsx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/rewriter/generate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b1IVTT2cdQGVxRlt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/rewriter/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pa3NQtNwBIfAGomF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/rewriter/custom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Tv2PSF1k4auqM3H2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/rewriter/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d5RZUgRPfURFXvIt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/rewriter/brand' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ltlLvArugkXCy5tZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/video' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.video',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/video/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.video.create',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/video/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TYo5efpznRNcNpHg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/video/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n9gs6xmSmdZU7m1v',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/video/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aDBXuEUA9bJKVlIJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/images' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.images',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/images/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eYPXVLLU1IAEeQEs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/images/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wYKC1h7DiiXnbP9p',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/images/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cvMevrsr6P5xYwXk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/images/load' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.images.load',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.codex',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/code/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Xzd6rS2NzMdIHIWU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/code/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yfvSK4us9EdhwuLg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/code/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nEIpR57OWTGgmRuv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/code/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YXMcN7XEr1NU9Vbm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.chat',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9xo2X2qxQtJdnBqM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/process/custom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GRCcnO4JZP7k6xUH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GAADzhFHZV50fxGM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/favorite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hcLDUaewaBQHUaeJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/generate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R2xabGwyx0VZ6d5j',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/generate/custom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EpWm47dWc1ll2leG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/conversation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1BlefAGbpvciRxMO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kuI8cf0ciGU5FETx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/rename' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p7zN9LCRGH9vCPc0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/listen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sOilNGb9zoqaDvbz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fgGv1Wq1DUbmDdT5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/speech-to-text' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.transcribe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/speech-to-text/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SOlwRZUYCRKTbiC5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/speech-to-text/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qPCT7zdTAxtaZBOV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/speech-to-text/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cDZ5gdXXyyREUor3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/speech-to-text/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OoRxinAkhwVsN6pA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.voiceover',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/synthesize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.voiceover.synthesize',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/listen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.voiceover.listen',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/listen-row' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wP0a5wFTwVTvCuDU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/audio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::48cb0jmWAInGVzJj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VzeIk5REZmyWeovl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9PG9ttf7VH12sb5F',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/clone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.voiceover.clone',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/clone/synthesize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.voiceover.clone.synthesize',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/clone/listen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.voiceover.clone.listen',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/clone/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.voiceover.clone.create',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/clone/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0Rc12hskWHOgM5U0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/clone/audio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::56SIA5D0UKdK9tKu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/clone/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3o3mZJ0bm70yoZMO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/clone/voice/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZLRReZKrqeC5Tu18',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/clone/configuration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8ZbvnJOHxM2BMG96',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/studio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.studio',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/studio/results' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.studio.results',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/studio/result/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Dy9sHmLBZx7DHk41',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/studio/final/result/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZnwRDPA4vLfsuhbE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/studio/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7JZkfQrAjnRSbaQv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/studio/music/merge' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lVGwf8ermURxNbxC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/studio/music/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oIB2awGShGJpuztg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/studio/music/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JhXcl8T6UFFRLWyN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/studio/music/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.music.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wizard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.wizard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wizard/generate/keywords' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5xPSCVKgwdQbNNLz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wizard/generate/ideas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nzJrANJEH9qvHMxK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wizard/generate/outlines' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vKIJ1FiCZ2KRrjIq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wizard/generate/talking-points' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uucBqAvON9Gc44xr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wizard/generate/images' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XzMbQwRmQWGuT7yo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wizard/generate/prepare' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::skuLICWkVs91xJXh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wizard/generate/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZpkCf6GTTRNtVoMV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wizard/generate/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5TjBnMKb12MqJmqa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/vision' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.vision',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/vision/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OhBvvRKcGG6vP7Gg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/vision/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0gnvWpCCxBCnrIc7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/vision/generate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TAikg3Kv4OQvs3of',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/vision/conversation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rEIRjLNfjKmOuN4O',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/vision/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bnrc5pVDhlhCuAbg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/vision/rename' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6ft3qOz8wDNSLmke',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/vision/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::opkDMyFDAAxz4Jny',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.chat.image',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/image/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tsydPoFyDNrpkFYo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/image/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0fQqNFY36scPnuUe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/image/conversation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vcEdJtHKiFhW9iXP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/image/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vMKRXQb2QmFv3RAc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/image/rename' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UuvbYaoJx43MuNwe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/image/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HmasH5riqH2TWSsq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.chat.file',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/file/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QhPvKi9WhfOQHdfA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/file/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Xrrm7DNGK7H25e8s',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/file/conversation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::itGDKlztljAiXluS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/file/rename' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7SxRe2TPFyHRSbMm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/file/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9kZltrXig9KeEqra',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/file/metainfo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tzAy5NMQJ8defccR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/file/credits' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U4wzDXlYXZ1AGhFw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/file/check-balance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mR5zmL71tIt3kIxM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/file/embedding' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JbhdxgLYfShyeX4a',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/web' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.chat.web',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/web/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ngqu21YRhfsWCp29',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/web/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0TyXinMBAHZ6rKbs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/web/conversation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oim186HOi8YFH07R',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/web/rename' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hKXts4aJMjLrgXxc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/web/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::909OiyXdK7jaPxIh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/web/metainfo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tV6goLCklJAj5W0o',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/web/credits' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DYkEMlWid7FC2AaW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/web/check-balance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EkIZxCrN0IQqDTcs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/web/embedding' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iyCIsYAk3nUKC2In',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/plagiarism' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.plagiarism',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/plagiarism/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s80RBPMG2IrPnvaR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/detector' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.detector',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/detector/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NttOigXtErL35owx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/brand' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.brand',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.brand.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/brand/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.brand.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/brand/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EFWuyclLRUEVhiX3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/youtube' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.youtube',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/youtube/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bVJphyPlVg4smQK0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/youtube/generate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jBodFZK9O9HjGvBa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/youtube/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KT7tJEIrZeCloylD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/youtube/custom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9xhML5cikl3ERbAL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/youtube/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y1AUZD9vSIFI89rC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/document' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PaMaAacTGCc9E19r',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/document/images' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.images',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/document/images/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KbA0aciZsOsCNORf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/document/codes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.codes',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/document/voiceovers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.voiceovers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/document/transcripts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.transcripts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/document/result/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uolnhEuVmsBRH4bI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/document/result/code/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mK05a99dZPx0qzWr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/document/result/voiceover/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mTEJPbvI8JkvqZ4X',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/document/result/transcript/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AbeZExkn1TD2STgO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/workbook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.workbooks',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4ueO9wrtH1e23ofL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'user.workbooks.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            '_route' => 'user.workbooks.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/workbook/result/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Tqb6ihLgzxZxpxUx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/workbook/change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.workbooks.change',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/security' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.security',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/security/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.security.password',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/security/2fa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.security.2fa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/security/2fa/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.security.2fa.activate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/security/2fa/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.security.2fa.deactivate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/project' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.project',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/edit/defaults' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.defaults',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/edit/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.delete.account',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/api/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.api',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/api/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.api.store',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/update/defaults' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.update.defaults',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/change/referral' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s4VfUHsL4uyA33yg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/theme' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XkgVCQmPp88vuQKI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xXWlOQ8iyYdPnmND',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/team' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.team',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.team.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/team/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.team.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/team/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.team.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/team/leave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JcT5hllTsyCIfDmk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/team/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zWFa6BaLZwCBeZ4T',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/purchases/subscriptions/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uUvljzSZpxeU0vdP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/purchases' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.purchases',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/purchases/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.purchases.subscriptions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/purchases/invoice/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xZ4bn6ymh8uj3xEs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/pricing/plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.plans',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/pricing/plan/one-time' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.prepaid.checkout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/referral' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/referral/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/referral/payouts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.payout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/referral/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/referral/payouts/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.payout.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/referral/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.referrals',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/support' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.support',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.support.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/support/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i8NS9wo8fCsJJDUz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/support/response' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.support.response',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/support/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.support.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.notifications',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/notification/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UfWCgvuH16qXylXm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/notifications/mark-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.notifications.markAllRead',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/notifications/delete-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.notifications.deleteAll',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/notifications/mark-as-read' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.notifications.mark',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/approved/razorpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.approved.razorpay',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/approved/midtrans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.approved.midtrans',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/approved/iyzico' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.approved.iyzico',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/approved/braintree' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.approved.braintree',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/approved/paddle' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C1yYZjoIir83Pz4M',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/approved' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.approved',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/cancelled' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.cancelled',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/subscription/razorpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.subscription.razorpay',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/subscription/flutterwave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.subscription.flutterwave',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/subscription/stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.subscription.stripe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/subscription/approved' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.subscription.approved',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/subscription/cancelled' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.subscription.cancelled',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/stripe/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.stripe.process',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/stripe/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.stripe.cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/a(?|pi/v1/users/([^/]++)(?|(*:35))|uth/(?|redirect/([^/]++)(*:67)|callback/([^/]++)(*:91))|dmin/(?|davinci/custom/([^/]++)/(?|show(*:138)|update(*:152))|chat(?|s/chat/(?|([^/]++)/(?|edit(*:194)|update(*:208))|prompt/([^/]++)/(?|edit(*:240)|update(*:254)))|/(?|assistant/([^/]++)/(?|show(*:294)|update(*:308))|training/([^/]++)/(?|show(*:342)|update(*:356))))|image/prompt/([^/]++)/(?|edit(*:396)|update(*:410))|users/(?|([^/]++)(?|/(?|s(?|how(*:450)|ubscription(*:469))|edit(*:482)|credit(*:496)|assign(*:510)|increase(*:526)|update(*:540))|(*:549))|delete(*:564)|plan(*:576))|finance/(?|transaction/([^/]++)/(?|update(*:626)|show(*:638)|edit(*:650))|p(?|lan/([^/]++)(?|/(?|show(*:686)|edit(*:698)|renew(*:711))|(*:720))|r(?|epaid/(?|([^/]++)(?|/(?|show(*:761)|edit(*:773))|(*:782))|delete(*:797))|omocodes/([^/]++)(?|/(?|show(*:834)|edit(*:846))|(*:855)))))|referral/(?|([^/]++)/show(*:892)|payouts/([^/]++)/(?|s(?|how(*:927)|tore(*:939))|cancel(*:954)|decline(*:969)))|s(?|upport/([^/]++)/show(*:1003)|ettings/(?|steps/(?|([^/]++)(?|/edit(*:1048)|(*:1057))|delete(*:1073))|tools/(?|([^/]++)(?|/edit(*:1108)|(*:1117))|delete(*:1133))|f(?|eatures/(?|([^/]++)(?|/edit(*:1174)|(*:1183))|delete(*:1199))|aqs/([^/]++)(?|(*:1224)|/edit(*:1238)))|blogs/([^/]++)(?|(*:1266)|/edit(*:1280))|reviews/([^/]++)(?|(*:1309)|/edit(*:1323))|adsense/([^/]++)(?|(*:1352)|/edit(*:1366))))|notifications/(?|([^/]++)/show(*:1408)|system/([^/]++)/show(*:1437))|email/(?|templates/([^/]++)(?|/edit(*:1482)|(*:1491))|newsletter/(?|([^/]++)(?|/(?|view(*:1534)|edit(*:1547))|(*:1557))|delete(*:1573)|send(*:1586)))))|/re(?|gister/subscriber/plans/([^/]++)(*:1637)|set\\-password/([^/]++)(*:1668))|/verify\\-email/([^/]++)/([^/]++)(*:1710)|/blog/([^/]++)(*:1733)|/u(?|nsubscribe/process/([^/]++)(*:1774)|ser/(?|te(?|mplates/(?|custom(?|\\-template/([^/]++)(*:1834)|/(?|([^/]++)/(?|show(*:1863)|update(*:1878))|template/update(*:1903)))|original\\-template/([^/]++)(*:1941))|xt\\-to\\-speech/(?|([^/]++)/show(*:1982)|studio/result/([^/]++)/show(?|(*:2021)|\\-studio(*:2038)))|am/([^/]++)/(?|show(*:2068)|edit(*:2081)|update(*:2096)))|chat(?|/custom/([^/]++)/(?|show(*:2138)|update(*:2153))|s/(?|([^/]++)(*:2176)|custom/([^/]++)(*:2200)|file/([^/]++)(*:2222)|web/([^/]++)(*:2243)))|video/([^/]++)/show(*:2273)|brand/([^/]++)/(?|edit(*:2304)|update(*:2319))|document/result/(?|([^/]++)/show(*:2361)|code/([^/]++)/show(*:2388)|voiceover/([^/]++)/show(*:2420)|transcript/([^/]++)/show(*:2453))|workbook/result/([^/]++)/show(*:2492)|p(?|urchases/show/([^/]++)(*:2527)|ricing/plan/subscription/([^/]++)(*:2569)|ayments/(?|pay/(?|promocode/(?|prepaid/([^/]++)(*:2625)|subscription/([^/]++)(*:2655))|([^/]++)(?|(*:2676))|one\\-time/([^/]++)/([^/]++)(?|(*:2716)))|invoice/([^/]++)/(?|generate(*:2755)|show(*:2768)|transfer(*:2785))))|referral/payouts/([^/]++)/(?|cancel(*:2832)|decline(*:2848))|support/([^/]++)/show(*:2879)|notification/([^/]++)/show(*:2914)))|/locale/([^/]++)(*:2941))/?$}sDu',
    ),
    3 => 
    array (
      35 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'users.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      67 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AosAPRiDp5P7yOar',
          ),
          1 => 
          array (
            0 => 'driver',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      91 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eKnaEmlPdwQf7pdl',
          ),
          1 => 
          array (
            0 => 'driver',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      138 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.custom.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      152 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.custom.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      194 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chat.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      208 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chat.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      240 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chat.prompt.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      254 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chat.prompt.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      294 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.chat.assistant.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      308 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.chat.assistant.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      342 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.chat.training.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      356 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.chat.training.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      396 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.image.prompt.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      410 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.image.prompt.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      450 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      469 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.subscription',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      482 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      496 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.credit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      510 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.assign',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      526 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.increase',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      540 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      549 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.change',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      564 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bYUlAid7FR8I4Fbs',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      576 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::thKBxRn79XGJ6i3e',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      626 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.transaction.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      638 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.transaction.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      650 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.transaction.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      686 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.plan.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      698 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.plan.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      711 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.plan.renew',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      720 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.plan.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.plan.push',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      761 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.prepaid.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      773 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.prepaid.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      782 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.prepaid.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      797 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D4afGZ1B9Yhx5T2c',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      834 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      846 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      855 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      892 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.show',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      927 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.payouts.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      939 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.payouts.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      954 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.payouts.cancel',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      969 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.payouts.decline',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1003 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.show',
          ),
          1 => 
          array (
            0 => 'ticket_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1048 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.step.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1057 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.step.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1073 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v3kdRvZRBtTiURWf',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1108 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.tool.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1117 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.tool.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1133 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JMsblnaKhiNeZdWH',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1174 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.feature.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1183 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.feature.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1199 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::34kTWF3r0Su83AUz',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1224 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.faq.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1238 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.faq.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1266 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.blog.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1280 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.blog.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.review.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1323 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.review.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1352 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.adsense.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1366 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.adsense.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1408 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1437 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.systemShow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1482 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.templates.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1491 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.templates.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1534 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.newsletter.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1547 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.newsletter.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1557 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.newsletter.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1573 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KDEFDkCYB5V0w39I',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1586 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Yn9R3RJDg88T4Vid',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1637 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register.subscriber.plans.store',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1668 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1710 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.verify',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1733 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogs.show',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1774 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'email.unsubscribe.process',
          ),
          1 => 
          array (
            0 => 'email',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1834 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fYxjLEEPolYeoUb9',
          ),
          1 => 
          array (
            0 => 'code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1863 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.templates.custom.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1878 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.templates.custom.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1903 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eblUZaWWoxHI6g7i',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1941 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9kkFcrplG1UOdCGN',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1982 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.voiceover.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2021 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.studio.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2038 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.studio.show.studio',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2068 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.team.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2081 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.team.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2096 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.team.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2138 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.chat.custom.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2153 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.chat.custom.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2176 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3EF0ZQJ3MYSf3qcF',
          ),
          1 => 
          array (
            0 => 'code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k7zHFmoxaRciCIEi',
          ),
          1 => 
          array (
            0 => 'code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2222 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x0wxVOQRkXglq4o2',
          ),
          1 => 
          array (
            0 => 'code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2243 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y4XDBrZQQE48eyTv',
          ),
          1 => 
          array (
            0 => 'code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2273 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.video.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2304 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.brand.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2319 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.brand.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2361 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2388 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.code.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2420 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.voiceover.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2453 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.transcript.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2492 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.workbooks.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2527 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.purchases.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2569 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.plan.subscribe',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2625 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.promocodes.prepaid',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2655 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.promocodes.subscription',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2676 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gPxIoF6eW8JI1Le1',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.pay',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2716 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0J3Cuo1J4agQ6FZk',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.pay.prepaid',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2755 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.invoice',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2768 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.invoice.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2785 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.invoice.transfer',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2832 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.payout.cancel',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2848 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.payout.decline',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2879 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.support.show',
          ),
          1 => 
          array (
            0 => 'ticket_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2914 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.notifications.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2941 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'locale',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::C4qXGVS0d154vf5x' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::C4qXGVS0d154vf5x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FpgXMWE0qwPSg26Y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006870000000000000000";}";s:4:"hash";s:44:"jyPKJxqpVLruLivpvDikf6Od2qWUMqGPcbTzMYId8bk=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::FpgXMWE0qwPSg26Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'users.index',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@index',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'users.store',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@store',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'users.show',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@show',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'users.update',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@update',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'users.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9A6ZyapqqL1eWP56' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9A6ZyapqqL1eWP56',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register.subscriber' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register/subscriber',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@storeSubscriber',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@storeSubscriber',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register.subscriber',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register.subscriber.plans' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register/subscriber/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@stepTwo',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@stepTwo',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register.subscriber.plans',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register.subscriber.plans.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register/subscriber/plans/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@stepTwoStore',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@stepTwoStore',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register.subscriber.plans.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register.subscriber.payment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register/subscriber/payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@stepThree',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@stepThree',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register.subscriber.payment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UZhPQbfjYIXDHIBv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UZhPQbfjYIXDHIBv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.2fa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/2fa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@twoFactorAuthentication',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@twoFactorAuthentication',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login.2fa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.2fa.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/2fa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@twoFactorAuthenticationStore',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@twoFactorAuthenticationStore',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login.2fa.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.notice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\EmailVerificationPromptController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Auth\\EmailVerificationPromptController@__invoke',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.notice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify-email/{id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
          2 => 'signed',
          3 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController@__invoke',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'email/verification-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
          2 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.send',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::80z6UNWtfm7N9SLa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'verify-email/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
          2 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController@check',
        'controller' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController@check',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::80z6UNWtfm7N9SLa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'confirm-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@show',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RRNEGHwiRgEo3PaJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'confirm-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RRNEGHwiRgEo3PaJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AosAPRiDp5P7yOar' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/redirect/{driver}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\SocialAuthController@redirectToProvider',
        'controller' => 'App\\Http\\Controllers\\Auth\\SocialAuthController@redirectToProvider',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AosAPRiDp5P7yOar',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eKnaEmlPdwQf7pdl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/callback/{driver}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\SocialAuthController@handleProviderCallback',
        'controller' => 'App\\Http\\Controllers\\Auth\\SocialAuthController@handleProviderCallback',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::eKnaEmlPdwQf7pdl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7Exzc1Jasyd7pNZe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7Exzc1Jasyd7pNZe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@blogShow',
        'controller' => 'App\\Http\\Controllers\\HomeController@blogShow',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blogs.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@contactShow',
        'controller' => 'App\\Http\\Controllers\\HomeController@contactShow',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@contactSend',
        'controller' => 'App\\Http\\Controllers\\HomeController@contactSend',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contact.send',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@aboutUs',
        'controller' => 'App\\Http\\Controllers\\HomeController@aboutUs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'terms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'terms-and-conditions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@termsAndConditions',
        'controller' => 'App\\Http\\Controllers\\HomeController@termsAndConditions',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'terms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'privacy-policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@privacyPolicy',
        'controller' => 'App\\Http\\Controllers\\HomeController@privacyPolicy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'privacy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'email.unsubscribe.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'unsubscribe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@showUnsubscribe',
        'controller' => 'App\\Http\\Controllers\\HomeController@showUnsubscribe',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'email.unsubscribe.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'email.unsubscribe.process' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'unsubscribe/process/{email}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@unsubscribe',
        'controller' => 'App\\Http\\Controllers\\HomeController@unsubscribe',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'email.unsubscribe.process',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qY9r7HH8ZMaNauFf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\StripeWebhookController@handleStripe',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\StripeWebhookController@handleStripe',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qY9r7HH8ZMaNauFf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kR1t8ZCsMjLuuat9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/paypal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\PaypalWebhookController@handlePaypal',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\PaypalWebhookController@handlePaypal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kR1t8ZCsMjLuuat9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qqa534UG10eN6lmS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/paystack',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\PaystackWebhookController@handlePaystack',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\PaystackWebhookController@handlePaystack',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Qqa534UG10eN6lmS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TLViVPM8eASDs97g' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/razorpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\RazorpayWebhookController@handleRazorpay',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\RazorpayWebhookController@handleRazorpay',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TLViVPM8eASDs97g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mollie.webhook' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/mollie',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\MollieWebhookController@handleMollie',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\MollieWebhookController@handleMollie',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'mollie.webhook',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oO2zs7vxbGmLO01i' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/coinbase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\CoinbaseWebhookController@handleCoinbase',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\CoinbaseWebhookController@handleCoinbase',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::oO2zs7vxbGmLO01i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KU9ui4jCms5thNCK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/flutterwave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\FlutterwaveWebhookController@handleFlutterwave',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\FlutterwaveWebhookController@handleFlutterwave',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KU9ui4jCms5thNCK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::10jq1twCJAnzeoSN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/yookassa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\YookassaWebhookController@handleYookassa',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\YookassaWebhookController@handleYookassa',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::10jq1twCJAnzeoSN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y4nMtAyETtpzRVRO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/paddle',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\PaddleWebhookController@handlePaddle',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\PaddleWebhookController@handlePaddle',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::y4nMtAyETtpzRVRO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cbRYyz83oef6YFvO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/midtrans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\MidtransWebhookController@midtransPaddle',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\MidtransWebhookController@midtransPaddle',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cbRYyz83oef6YFvO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@index',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.requirements' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/requirements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@requirements',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@requirements',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install.requirements',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.permissions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@permissions',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@permissions',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install.permissions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.database' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@database',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@database',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install.database',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.database.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@storeDatabaseCredentials',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@storeDatabaseCredentials',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install.database.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.activation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/activation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@activation',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@activation',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install.activation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.activation.activate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/activation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@activateApplication',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@activateApplication',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install.activation.activate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'locale' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'locale/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LocaleController@language',
        'controller' => 'App\\Http\\Controllers\\LocaleController@language',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'locale',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BZP9wRCEjHNQYteF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/update/now',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UpdateController@updateDatabase',
        'controller' => 'App\\Http\\Controllers\\Admin\\UpdateController@updateDatabase',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::BZP9wRCEjHNQYteF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.templates' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templates',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templates',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.templates',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RDfuapdflnka93tm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/templates/template/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@descriptionUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@descriptionUpdate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::RDfuapdflnka93tm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TqziePBs75qNwgGL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/templates/template/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateActivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateActivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::TqziePBs75qNwgGL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u4ekCpNfAijs6L9u' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/templates/template/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateDeactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateDeactivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::u4ekCpNfAijs6L9u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::802nBCKgEzaWOFdD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/templates/template/changepackage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@assignPackage',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@assignPackage',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::802nBCKgEzaWOFdD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YqEOBm8j1veVgqu6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/templates/template/setnew',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@setNew',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@setNew',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::YqEOBm8j1veVgqu6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ProS3vDZ9LhbgFwz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/templates/template/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@deleteTemplate',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@deleteTemplate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ProS3vDZ9LhbgFwz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VH7JCZeumAbP2ET4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/templates/activate/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateActivateAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateActivateAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::VH7JCZeumAbP2ET4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cAOJbHC83C64LBKX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/templates/deactivate/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateDeactivateAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateDeactivateAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::cAOJbHC83C64LBKX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.configs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/configs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.configs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.configs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/configs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.configs.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.configs.store.api' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/configs/api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@storeAPI',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@storeAPI',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.configs.store.api',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.configs.store.extended' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/configs/extended',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@storeExtended',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@storeExtended',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.configs.store.extended',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.configs.keys' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/configs/keys',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@showKeys',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@showKeys',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.configs.keys',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.configs.keys.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/configs/keys/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@createKeys',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@createKeys',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.configs.keys.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.configs.keys.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/configs/keys/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@storeKeys',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@storeKeys',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.configs.keys.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.configs.fine-tune' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/configs/fine-tune',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@showFineTune',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@showFineTune',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.configs.fine-tune',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.configs.fine-tune.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/configs/fine-tune',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@createFineTune',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@createFineTune',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.configs.fine-tune.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iMh72DdVQdA3tQD0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/configs/fine-tune/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@deleteFineTune',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@deleteFineTune',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::iMh72DdVQdA3tQD0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cqky23fM9EhwNJox' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/configs/keys/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::cqky23fM9EhwNJox',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EmaIoZARYzzCSFXc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/configs/keys/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@activate',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@activate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::EmaIoZARYzzCSFXc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gV6Rb5vwCFz6j9Uo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/configs/keys/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::gV6Rb5vwCFz6j9Uo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.custom' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/custom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.custom',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.custom.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@createTemplate',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@createTemplate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.custom.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.custom.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/custom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.custom.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.custom.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/custom/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.custom.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.custom.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/davinci/custom/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.custom.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.custom.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/custom/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@category',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@category',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.custom.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cWoXqiFFeSPIno4R' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/custom/category/change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@change',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@change',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::cWoXqiFFeSPIno4R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mxcnV4tRntBrZ4ES' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/custom/category/description',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@description',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@description',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::mxcnV4tRntBrZ4ES',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gJX4jxnNJrTcIXMh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/custom/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::gJX4jxnNJrTcIXMh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ycV1lZo8bXCxm8ne' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/custom/category/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ycV1lZo8bXCxm8ne',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.voices' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/text-to-speech/voices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voices',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voices',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.voices',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MljqTP62f5qhIqx5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/text-to-speech/voices/avatar/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@changeAvatar',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@changeAvatar',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::MljqTP62f5qhIqx5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b5vSA8wniOpWmjlN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/text-to-speech/voice/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voiceUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voiceUpdate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::b5vSA8wniOpWmjlN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IduqIc97O20sNSsc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/text-to-speech/voices/voice/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voiceActivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voiceActivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::IduqIc97O20sNSsc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gQ4FCYzIrsbGDPyI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/text-to-speech/voices/voice/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voiceDeactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voiceDeactivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::gQ4FCYzIrsbGDPyI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pTkCrqcR3ySxRBoQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/text-to-speech/voices/activate/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voicesActivateAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voicesActivateAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::pTkCrqcR3ySxRBoQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pqQG8a2aO88bdQjS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/text-to-speech/voices/deactivate/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voicesDeactivateAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voicesDeactivateAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::pqQG8a2aO88bdQjS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chats' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@chats',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@chats',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chats',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0I28HKScGXoq8eZI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/avatar/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@changeAvatar',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@changeAvatar',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::0I28HKScGXoq8eZI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7o2jgxQSfahjw1ig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@chatUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@chatUpdate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::7o2jgxQSfahjw1ig',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WBtGZ6UrZpQM1yvT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/chat/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@chatActivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@chatActivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::WBtGZ6UrZpQM1yvT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ISjexFvW3SE621ho' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/chat/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@chatDeactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@chatDeactivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ISjexFvW3SE621ho',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chat.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chats/chat/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chat.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chat.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/chat/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chat.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chat.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chats/chat/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chat.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chat.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/chats/chat/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chat.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chat.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chats/chat/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@category',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@category',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chat.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wm7nQMTFnZsuVJI7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/chat/category/change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@change',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@change',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::wm7nQMTFnZsuVJI7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GfdPR5X6NQOrh8dK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/chat/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@createCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@createCategory',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::GfdPR5X6NQOrh8dK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Jz3a17AkthJIhVbx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/chat/category/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Jz3a17AkthJIhVbx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chat.prompt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chats/chat/prompt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@prompt',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@prompt',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chat.prompt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chat.prompt.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chats/chat/prompt/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptCreate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptCreate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chat.prompt.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chat.prompt.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/chat/prompt/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptStore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chat.prompt.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chat.prompt.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chats/chat/prompt/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptEdit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptEdit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chat.prompt.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chat.prompt.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/chats/chat/prompt/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptUpdate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chat.prompt.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l94ndPDFlLXHZXAe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/chat/prompt/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptActivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptActivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::l94ndPDFlLXHZXAe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zcDmVPFblDaAMoNP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/chat/prompt/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptDeactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptDeactivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::zcDmVPFblDaAMoNP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Jr7eIwAOgwfPFoEI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/chat/prompt/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptDelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptDelete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Jr7eIwAOgwfPFoEI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.chat.assistant' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chat/assistant',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatAssistantController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatAssistantController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.chat.assistant',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.chat.assistant.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chat/assistant',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatAssistantController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatAssistantController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.chat.assistant.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.chat.assistant.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chat/assistant/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatAssistantController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatAssistantController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.chat.assistant.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.chat.assistant.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chat/assistant/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatAssistantController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatAssistantController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.chat.assistant.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.chat.assistant.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/chat/assistant/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatAssistantController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatAssistantController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.chat.assistant.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AbKQVgyd1hLM3vIa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chat/assistant/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatAssistantController@chatActivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatAssistantController@chatActivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::AbKQVgyd1hLM3vIa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3pmaqhwM09KLdJzF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chat/assistant/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatAssistantController@chatDeactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatAssistantController@chatDeactivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::3pmaqhwM09KLdJzF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NaTryRPu5wjEK5r9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chat/assistant/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatAssistantController@chatDelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatAssistantController@chatDelete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::NaTryRPu5wjEK5r9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.chat.training' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chat/training',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatTrainingController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatTrainingController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.chat.training',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.chat.training.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chat/training',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatTrainingController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatTrainingController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.chat.training.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.chat.training.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chat/training/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatTrainingController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatTrainingController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.chat.training.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.chat.training.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/chat/training/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatTrainingController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatTrainingController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.chat.training.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qYXTt1Eq7t0a4u5s' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chat/training/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatTrainingController@chatActivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatTrainingController@chatActivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::qYXTt1Eq7t0a4u5s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FaILWAAqRnwMerzd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chat/training/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatTrainingController@chatDeactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatTrainingController@chatDeactivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::FaILWAAqRnwMerzd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yu2cSxPbvQL1xpdO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chat/training/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatTrainingController@chatDelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatTrainingController@chatDelete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::yu2cSxPbvQL1xpdO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.image.prompt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/image/prompt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImagePromptController@prompt',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImagePromptController@prompt',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.image.prompt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.image.prompt.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/image/prompt/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImagePromptController@promptCreate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImagePromptController@promptCreate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.image.prompt.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.image.prompt.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/image/prompt/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImagePromptController@promptStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImagePromptController@promptStore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.image.prompt.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.image.prompt.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/image/prompt/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImagePromptController@promptEdit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImagePromptController@promptEdit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.image.prompt.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.image.prompt.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/image/prompt/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImagePromptController@promptUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImagePromptController@promptUpdate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.image.prompt.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6xnPhwsyooVCtcOq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/image/prompt/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImagePromptController@promptActivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImagePromptController@promptActivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::6xnPhwsyooVCtcOq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w0wzV3QBLw36pcV0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/image/prompt/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImagePromptController@promptDeactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImagePromptController@promptDeactivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::w0wzV3QBLw36pcV0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x9z3bIYKetxA9GEI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/image/prompt/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImagePromptController@promptDelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImagePromptController@promptDelete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::x9z3bIYKetxA9GEI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.studio' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/studio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StudioSettingsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\StudioSettingsController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.studio',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.studio.music' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/studio/music',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StudioSettingsController@music',
        'controller' => 'App\\Http\\Controllers\\Admin\\StudioSettingsController@music',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.studio.music',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oRHoF4P4UMuUoELA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/studio/music/public',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StudioSettingsController@public',
        'controller' => 'App\\Http\\Controllers\\Admin\\StudioSettingsController@public',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::oRHoF4P4UMuUoELA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BlKOvVFVumIHauX6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/studio/music/private',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StudioSettingsController@private',
        'controller' => 'App\\Http\\Controllers\\Admin\\StudioSettingsController@private',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::BlKOvVFVumIHauX6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DAwpWxepUaU6cFqZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/studio/music/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StudioSettingsController@upload',
        'controller' => 'App\\Http\\Controllers\\Admin\\StudioSettingsController@upload',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::DAwpWxepUaU6cFqZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s7QIHujo6j0L0qRl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/studio/music/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StudioSettingsController@deleteMusic',
        'controller' => 'App\\Http\\Controllers\\Admin\\StudioSettingsController@deleteMusic',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::s7QIHujo6j0L0qRl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8QhSbRVsjq2XgEUu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/studio/music/result/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StudioSettingsController@deleteResult',
        'controller' => 'App\\Http\\Controllers\\Admin\\StudioSettingsController@deleteResult',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::8QhSbRVsjq2XgEUu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.activity' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/activity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@activity',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@activity',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.activity',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@listUsers',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@listUsers',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{user}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.credit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{user}/credit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@credit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@credit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.credit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.subscription' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{user}/subscription',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@subscription',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@subscription',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.subscription',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.assign' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/{user}/assign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@assignSubscription',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@assignSubscription',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.assign',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.increase' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/{user}/increase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@increase',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@increase',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.increase',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/users/{user}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.change' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@change',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@change',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bYUlAid7FR8I4Fbs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::bYUlAid7FR8I4Fbs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::thKBxRn79XGJ6i3e' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@hiddenPlans',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@hiddenPlans',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::thKBxRn79XGJ6i3e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.transactions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@listTransactions',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@listTransactions',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.transactions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.transaction.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/finance/transaction/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.transaction.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.transaction.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/transaction/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.transaction.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.transaction.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/transaction/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.transaction.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Lc3FUlN9FOMdSi28' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/transaction/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Lc3FUlN9FOMdSi28',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.subscriptions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@listSubscriptions',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@listSubscriptions',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.subscriptions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.stop.subscription' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/subscriptions/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@stopSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@stopSubscription',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.stop.subscription',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plans' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plans',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plan.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plan.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plan.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/plan/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plan.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plan.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/plan/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plan.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plan.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/plan/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plan.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plan.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/finance/plan/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plan.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plan.renew' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/plan/{id}/renew',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@renew',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@renew',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plan.renew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plan.push' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/plan/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@push',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@push',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plan.push',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pRXTY3sKJp1lqBEe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/plan/subscription/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::pRXTY3sKJp1lqBEe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.prepaid' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/prepaid',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.prepaid',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.prepaid.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/prepaid',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.prepaid.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.prepaid.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/prepaid/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.prepaid.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.prepaid.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/prepaid/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.prepaid.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.prepaid.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/prepaid/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.prepaid.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.prepaid.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/finance/prepaid/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.prepaid.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D4afGZ1B9Yhx5T2c' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/prepaid/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::D4afGZ1B9Yhx5T2c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/promocodes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/promocodes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/promocodes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/promocodes/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/promocodes/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/finance/promocodes/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/finance/promocodes/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/promocodes/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.settings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/referral/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.settings.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/{order_id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@paymentShow',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@paymentShow',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.payouts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/payouts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payouts',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payouts',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.payouts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.payouts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/payouts/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsShow',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsShow',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.payouts.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.payouts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/referral/payouts/{id}/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsUpdate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.payouts.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.payouts.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/payouts/{id}/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsCancel',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsCancel',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.payouts.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.payouts.decline' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/referral/payouts/{id}/decline',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsDecline',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsDecline',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.payouts.decline',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.top' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/top',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@topReferrers',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@topReferrers',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.top',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InvoiceController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\InvoiceController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.invoice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.invoice.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InvoiceController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\InvoiceController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.invoice.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSettingController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSettingController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.settings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSettingController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSettingController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.settings.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupportController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupportController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.support',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/support/{ticket_id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupportController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupportController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.support.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.response' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/support/response',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupportController@response',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupportController@response',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.support.response',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1Psl94rXrxlCHS1E' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/support/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupportController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupportController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::1Psl94rXrxlCHS1E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.system' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/sytem',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@system',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@system',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.system',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.systemShow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/system/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@systemShow',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@systemShow',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.systemShow',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.markAllRead' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/mark-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@markAllRead',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@markAllRead',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.markAllRead',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.deleteAll' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/delete-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@deleteAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@deleteAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.deleteAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AdrEsPxdwHp8rJpW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/notifications/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::AdrEsPxdwHp8rJpW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.templates' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/email/templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailNotificationController@templates',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailNotificationController@templates',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.email.templates',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.templates.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/email/templates/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailNotificationController@editTemplate',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailNotificationController@editTemplate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.email.templates.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.templates.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/email/templates/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailNotificationController@updateTemplate',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailNotificationController@updateTemplate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.email.templates.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.newsletter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/email/newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailNotificationController@newsletter',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailNotificationController@newsletter',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.email.newsletter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.newsletter.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/email/newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailNotificationController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailNotificationController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.email.newsletter.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.newsletter.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/email/newsletter/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailNotificationController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailNotificationController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.email.newsletter.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.newsletter.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/email/newsletter/{id}/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailNotificationController@view',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailNotificationController@view',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.email.newsletter.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.newsletter.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/email/newsletter/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailNotificationController@editEmail',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailNotificationController@editEmail',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.email.newsletter.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.newsletter.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/email/newsletter/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailNotificationController@updateEmail',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailNotificationController@updateEmail',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.email.newsletter.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KDEFDkCYB5V0w39I' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/email/newsletter/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailNotificationController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailNotificationController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::KDEFDkCYB5V0w39I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Yn9R3RJDg88T4Vid' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/email/newsletter/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailNotificationController@send',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailNotificationController@send',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Yn9R3RJDg88T4Vid',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.global' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/global',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\GlobalController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\GlobalController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.global',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.global.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/global',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\GlobalController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\GlobalController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.global.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.smtp.test' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/smtp/test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\SMTPController@test',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\SMTPController@test',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.smtp.test',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.smtp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/smtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\SMTPController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\SMTPController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.smtp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.smtp.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/smtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\SMTPController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\SMTPController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.smtp.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.registration' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/registration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\RegistrationController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\RegistrationController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.registration',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.registration.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/registration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\RegistrationController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\RegistrationController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.registration.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.oauth' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/oauth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\OAuthController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\OAuthController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.oauth',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.oauth.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/oauth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\OAuthController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\OAuthController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.oauth.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.activation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/activation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.activation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.activation.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/activation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.activation.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Gd7tHVF52Z0ftJ1w' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/activation/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Gd7tHVF52Z0ftJ1w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.activation.manual' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/activation/manual',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@showManualActivation',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@showManualActivation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.activation.manual',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.activation.manual.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/activation/manual',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@storeManualActivation',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@storeManualActivation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.activation.manual.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.appearance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/appearance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\AppearanceController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\AppearanceController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.appearance',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.appearance.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/appearance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\AppearanceController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\AppearanceController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.appearance.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.frontend' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/frontend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.frontend',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.frontend.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/frontend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.frontend.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.step' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/steps',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@showSteps',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@showSteps',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.step',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.step.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/steps/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@createSteps',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@createSteps',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.step.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.step.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/steps/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@storeSteps',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@storeSteps',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.step.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.step.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/steps/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@editSteps',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@editSteps',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.step.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.step.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/steps/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@updateSteps',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@updateSteps',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.step.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v3kdRvZRBtTiURWf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/steps/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@deleteSteps',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@deleteSteps',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::v3kdRvZRBtTiURWf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.tool' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/tools',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@showTools',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@showTools',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.tool',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.tool.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/tools/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@createTools',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@createTools',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.tool.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.tool.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/tools/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@storeTools',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@storeTools',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.tool.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.tool.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/tools/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@editTools',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@editTools',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.tool.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.tool.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/tools/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@updateTools',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@updateTools',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.tool.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JMsblnaKhiNeZdWH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/tools/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@deleteTools',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@deleteTools',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::JMsblnaKhiNeZdWH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.feature' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/features',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@showFeatures',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@showFeatures',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.feature',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.feature.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/features/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@createFeatures',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@createFeatures',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.feature.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.feature.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/features/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@storeFeatures',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@storeFeatures',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.feature.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.feature.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/features/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@editFeatures',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@editFeatures',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.feature.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.feature.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/features/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@updateFeatures',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@updateFeatures',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.feature.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::34kTWF3r0Su83AUz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/features/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@deleteFeatures',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@deleteFeatures',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::34kTWF3r0Su83AUz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.blog.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/blog/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.blog.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.blog.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.blog.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.blog.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/blogs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.blog.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.blog.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/blogs/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.blog.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bRtf0kWAwPejuThq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/blog/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::bRtf0kWAwPejuThq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.faq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.faq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.faq.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/faq/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.faq.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.faq.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.faq.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.faq.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/faqs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.faq.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.faq.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/faqs/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.faq.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5hRr5YvOVwgXLKjS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/faq/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::5hRr5YvOVwgXLKjS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.review' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.review',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.review.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/review/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.review.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.review.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.review.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.review.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/reviews/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.review.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.review.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/reviews/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.review.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::maGy82TdvSSqctu1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/review/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::maGy82TdvSSqctu1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.adsense' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/adsense',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\AdsenseController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\AdsenseController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.adsense',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.adsense.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/adsense/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\AdsenseController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\AdsenseController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.adsense.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.adsense.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/adsense/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\AdsenseController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\AdsenseController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.adsense.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.terms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\PageController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\PageController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.terms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\PageController@indexAbout',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\PageController@indexAbout',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.terms.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\PageController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\PageController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.terms.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.about.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\PageController@storeAbout',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\PageController@storeAbout',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.about.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.upgrade' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/upgrade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\UpgradeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\UpgradeController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.upgrade',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.upgrade.start' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/upgrade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\UpgradeController@upgrade',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\UpgradeController@upgrade',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.upgrade.start',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.clear' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ClearCacheController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ClearCacheController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.clear',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.clear.cache' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/clear/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ClearCacheController@cache',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ClearCacheController@cache',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.clear.cache',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.clear.symlink' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/clear/symlink',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ClearCacheController@symlink',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ClearCacheController@symlink',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.clear.symlink',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserDashboardController@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserDashboardController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YojTwmxOT6HrOqgw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/dashboard/favorite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserDashboardController@favorite',
        'controller' => 'App\\Http\\Controllers\\User\\UserDashboardController@favorite',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::YojTwmxOT6HrOqgw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NWS9NbPY0Q5CYeFy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/dashboard/favoritecustom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserDashboardController@favoriteCustom',
        'controller' => 'App\\Http\\Controllers\\User\\UserDashboardController@favoriteCustom',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::NWS9NbPY0Q5CYeFy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.templates' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@index',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.templates',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cb8Dme0n9akyMHFw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/original-template/generate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@generate',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@generate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::cb8Dme0n9akyMHFw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zcm6NpRU4uM2WAEu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/original-template/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@process',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Zcm6NpRU4uM2WAEu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RLBfKRLM1U8srPP1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/custom-template/customGenerate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@customGenerate',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@customGenerate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::RLBfKRLM1U8srPP1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::edYVnmXlyTzbl4yY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/custom-template/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@process',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::edYVnmXlyTzbl4yY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Siv6GukMbTXoLU7J' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@save',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@save',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Siv6GukMbTXoLU7J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Axfp2P9AylOPYy5q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/brand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@brand',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@brand',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Axfp2P9AylOPYy5q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5fOVanQU5MAhxwnc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/original-template/favorite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@favorite',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@favorite',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::5fOVanQU5MAhxwnc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OZN7CbdXPj1PNLNo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/original-template/favoritecustom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@favoriteCustom',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@favoriteCustom',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::OZN7CbdXPj1PNLNo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ps4XR8XdHEEIl4cY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/custom-template/favorite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@favoriteCustom',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@favoriteCustom',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Ps4XR8XdHEEIl4cY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fYxjLEEPolYeoUb9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/custom-template/{code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewCustomTemplate',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewCustomTemplate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::fYxjLEEPolYeoUb9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9kkFcrplG1UOdCGN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/original-template/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewOriginalTemplate',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewOriginalTemplate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::9kkFcrplG1UOdCGN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.templates.custom' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/custom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserCustomTemplateController@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserCustomTemplateController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.templates.custom',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.templates.custom.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/custom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserCustomTemplateController@store',
        'controller' => 'App\\Http\\Controllers\\User\\UserCustomTemplateController@store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.templates.custom.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.templates.custom.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/custom/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserCustomTemplateController@show',
        'controller' => 'App\\Http\\Controllers\\User\\UserCustomTemplateController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.templates.custom.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.templates.custom.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/templates/custom/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserCustomTemplateController@update',
        'controller' => 'App\\Http\\Controllers\\User\\UserCustomTemplateController@update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.templates.custom.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eblUZaWWoxHI6g7i' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/custom/template/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserCustomTemplateController@descriptionUpdate',
        'controller' => 'App\\Http\\Controllers\\User\\UserCustomTemplateController@descriptionUpdate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::eblUZaWWoxHI6g7i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fHQ0iTdpa40sBxHL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/custom/template/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserCustomTemplateController@templateActivate',
        'controller' => 'App\\Http\\Controllers\\User\\UserCustomTemplateController@templateActivate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::fHQ0iTdpa40sBxHL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WDdKGqHhx5XAzEXy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/custom/template/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserCustomTemplateController@templateDeactivate',
        'controller' => 'App\\Http\\Controllers\\User\\UserCustomTemplateController@templateDeactivate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::WDdKGqHhx5XAzEXy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jaW6qEpc7by7Z01i' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/custom/template/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserCustomTemplateController@deleteTemplate',
        'controller' => 'App\\Http\\Controllers\\User\\UserCustomTemplateController@deleteTemplate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::jaW6qEpc7by7Z01i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.chat.custom' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/chat/custom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserCustomChatController@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserCustomChatController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.chat.custom',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.chat.custom.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/custom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserCustomChatController@store',
        'controller' => 'App\\Http\\Controllers\\User\\UserCustomChatController@store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.chat.custom.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.chat.custom.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/chat/custom/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserCustomChatController@show',
        'controller' => 'App\\Http\\Controllers\\User\\UserCustomChatController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.chat.custom.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.chat.custom.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/chat/custom/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserCustomChatController@update',
        'controller' => 'App\\Http\\Controllers\\User\\UserCustomChatController@update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.chat.custom.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r9Leq0EWrM22iHWF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/custom/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserCustomChatController@chatActivate',
        'controller' => 'App\\Http\\Controllers\\User\\UserCustomChatController@chatActivate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::r9Leq0EWrM22iHWF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S3bSLw7bBHRELoSY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/custom/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserCustomChatController@chatDeactivate',
        'controller' => 'App\\Http\\Controllers\\User\\UserCustomChatController@chatDeactivate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::S3bSLw7bBHRELoSY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yQg5Zj2rescBIrdT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/custom/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserCustomChatController@chatDelete',
        'controller' => 'App\\Http\\Controllers\\User\\UserCustomChatController@chatDelete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::yQg5Zj2rescBIrdT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.smart.editor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/smart-editor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SmartEditorController@index',
        'controller' => 'App\\Http\\Controllers\\User\\SmartEditorController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.smart.editor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kgEULAiLJ7T9JseL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/smart-editor/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SmartEditorController@show',
        'controller' => 'App\\Http\\Controllers\\User\\SmartEditorController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::kgEULAiLJ7T9JseL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IMkrvXGE05nSKs0a' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/smart-editor/generate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SmartEditorController@generate',
        'controller' => 'App\\Http\\Controllers\\User\\SmartEditorController@generate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::IMkrvXGE05nSKs0a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GVe9hs5ESI9bzW4m' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/smart-editor/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SmartEditorController@process',
        'controller' => 'App\\Http\\Controllers\\User\\SmartEditorController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::GVe9hs5ESI9bzW4m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::22vgl16glKOWxcax' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/smart-editor/custom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SmartEditorController@custom',
        'controller' => 'App\\Http\\Controllers\\User\\SmartEditorController@custom',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::22vgl16glKOWxcax',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XfxNhAKYYI9g9swt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/smart-editor/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SmartEditorController@save',
        'controller' => 'App\\Http\\Controllers\\User\\SmartEditorController@save',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::XfxNhAKYYI9g9swt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NBljgPYVDR1ZJ4oe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/smart-editor/favorite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SmartEditorController@favorite',
        'controller' => 'App\\Http\\Controllers\\User\\SmartEditorController@favorite',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::NBljgPYVDR1ZJ4oe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qoe3OYaqXdY9uzrZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/smart-editor/wordpress',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SmartEditorController@wordpress',
        'controller' => 'App\\Http\\Controllers\\User\\SmartEditorController@wordpress',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Qoe3OYaqXdY9uzrZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.rewriter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/rewriter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\RewriterController@index',
        'controller' => 'App\\Http\\Controllers\\User\\RewriterController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.rewriter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vVl4pU7SLjRVlmsx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/rewriter/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\RewriterController@show',
        'controller' => 'App\\Http\\Controllers\\User\\RewriterController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::vVl4pU7SLjRVlmsx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b1IVTT2cdQGVxRlt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/rewriter/generate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\RewriterController@generate',
        'controller' => 'App\\Http\\Controllers\\User\\RewriterController@generate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::b1IVTT2cdQGVxRlt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pa3NQtNwBIfAGomF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/rewriter/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\RewriterController@process',
        'controller' => 'App\\Http\\Controllers\\User\\RewriterController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::pa3NQtNwBIfAGomF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Tv2PSF1k4auqM3H2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/rewriter/custom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\RewriterController@custom',
        'controller' => 'App\\Http\\Controllers\\User\\RewriterController@custom',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Tv2PSF1k4auqM3H2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d5RZUgRPfURFXvIt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/rewriter/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\RewriterController@save',
        'controller' => 'App\\Http\\Controllers\\User\\RewriterController@save',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::d5RZUgRPfURFXvIt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ltlLvArugkXCy5tZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/rewriter/brand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\RewriterController@brand',
        'controller' => 'App\\Http\\Controllers\\User\\RewriterController@brand',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ltlLvArugkXCy5tZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.video' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/video',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VideoController@index',
        'controller' => 'App\\Http\\Controllers\\User\\VideoController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.video',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.video.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/video/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VideoController@create',
        'controller' => 'App\\Http\\Controllers\\User\\VideoController@create',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.video.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.video.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/video/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VideoController@show',
        'controller' => 'App\\Http\\Controllers\\User\\VideoController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.video.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TYo5efpznRNcNpHg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/video/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VideoController@verify',
        'controller' => 'App\\Http\\Controllers\\User\\VideoController@verify',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::TYo5efpznRNcNpHg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n9gs6xmSmdZU7m1v' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/video/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VideoController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\VideoController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::n9gs6xmSmdZU7m1v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aDBXuEUA9bJKVlIJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/video/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VideoController@refresh',
        'controller' => 'App\\Http\\Controllers\\User\\VideoController@refresh',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::aDBXuEUA9bJKVlIJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.images' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/images',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ImageController@index',
        'controller' => 'App\\Http\\Controllers\\User\\ImageController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.images',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eYPXVLLU1IAEeQEs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/images/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ImageController@process',
        'controller' => 'App\\Http\\Controllers\\User\\ImageController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::eYPXVLLU1IAEeQEs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wYKC1h7DiiXnbP9p' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/images/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ImageController@view',
        'controller' => 'App\\Http\\Controllers\\User\\ImageController@view',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::wYKC1h7DiiXnbP9p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cvMevrsr6P5xYwXk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/images/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ImageController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\ImageController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::cvMevrsr6P5xYwXk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.images.load' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/images/load',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ImageController@loadMore',
        'controller' => 'App\\Http\\Controllers\\User\\ImageController@loadMore',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.images.load',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.codex' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CodeController@index',
        'controller' => 'App\\Http\\Controllers\\User\\CodeController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.codex',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xzd6rS2NzMdIHIWU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/code/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CodeController@process',
        'controller' => 'App\\Http\\Controllers\\User\\CodeController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Xzd6rS2NzMdIHIWU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yfvSK4us9EdhwuLg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/code/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CodeController@save',
        'controller' => 'App\\Http\\Controllers\\User\\CodeController@save',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::yfvSK4us9EdhwuLg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nEIpR57OWTGgmRuv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/code/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CodeController@view',
        'controller' => 'App\\Http\\Controllers\\User\\CodeController@view',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::nEIpR57OWTGgmRuv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YXMcN7XEr1NU9Vbm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/code/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CodeController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\CodeController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::YXMcN7XEr1NU9Vbm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.chat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/chat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@index',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.chat',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9xo2X2qxQtJdnBqM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@process',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::9xo2X2qxQtJdnBqM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GRCcnO4JZP7k6xUH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/process/custom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@processCustom',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@processCustom',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::GRCcnO4JZP7k6xUH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GAADzhFHZV50fxGM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@clear',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@clear',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::GAADzhFHZV50fxGM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hcLDUaewaBQHUaeJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/favorite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@favorite',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@favorite',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::hcLDUaewaBQHUaeJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R2xabGwyx0VZ6d5j' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/chat/generate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@generateChat',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@generateChat',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::R2xabGwyx0VZ6d5j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EpWm47dWc1ll2leG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/chat/generate/custom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@generateCustomChat',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@generateCustomChat',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::EpWm47dWc1ll2leG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1BlefAGbpvciRxMO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/conversation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@conversation',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@conversation',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::1BlefAGbpvciRxMO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kuI8cf0ciGU5FETx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@history',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@history',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::kuI8cf0ciGU5FETx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p7zN9LCRGH9vCPc0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/rename',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@rename',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@rename',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::p7zN9LCRGH9vCPc0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sOilNGb9zoqaDvbz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/listen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@listen',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@listen',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::sOilNGb9zoqaDvbz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fgGv1Wq1DUbmDdT5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::fgGv1Wq1DUbmDdT5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3EF0ZQJ3MYSf3qcF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/chats/{code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@view',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@view',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::3EF0ZQJ3MYSf3qcF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k7zHFmoxaRciCIEi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/chats/custom/{code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@viewCustom',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@viewCustom',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::k7zHFmoxaRciCIEi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.transcribe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/speech-to-text',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TranscribeController@index',
        'controller' => 'App\\Http\\Controllers\\User\\TranscribeController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.transcribe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SOlwRZUYCRKTbiC5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/speech-to-text/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TranscribeController@process',
        'controller' => 'App\\Http\\Controllers\\User\\TranscribeController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::SOlwRZUYCRKTbiC5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qPCT7zdTAxtaZBOV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/speech-to-text/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TranscribeController@save',
        'controller' => 'App\\Http\\Controllers\\User\\TranscribeController@save',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::qPCT7zdTAxtaZBOV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cDZ5gdXXyyREUor3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/speech-to-text/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TranscribeController@view',
        'controller' => 'App\\Http\\Controllers\\User\\TranscribeController@view',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::cDZ5gdXXyyREUor3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OoRxinAkhwVsN6pA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/speech-to-text/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TranscribeController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\TranscribeController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::OoRxinAkhwVsN6pA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.voiceover' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/text-to-speech',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@index',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.voiceover',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.voiceover.synthesize' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/synthesize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@synthesize',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@synthesize',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.voiceover.synthesize',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.voiceover.listen' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/listen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@listen',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@listen',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.voiceover.listen',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wP0a5wFTwVTvCuDU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/listen-row',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@listenRow',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@listenRow',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::wP0a5wFTwVTvCuDU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.voiceover.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/text-to-speech/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@show',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.voiceover.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::48cb0jmWAInGVzJj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/audio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@audio',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@audio',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::48cb0jmWAInGVzJj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VzeIk5REZmyWeovl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::VzeIk5REZmyWeovl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9PG9ttf7VH12sb5F' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@config',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@config',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::9PG9ttf7VH12sb5F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.voiceover.clone' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/text-to-speech/clone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverCloneController@index',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverCloneController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.voiceover.clone',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.voiceover.clone.synthesize' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/clone/synthesize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverCloneController@synthesize',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverCloneController@synthesize',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.voiceover.clone.synthesize',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.voiceover.clone.listen' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/clone/listen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverCloneController@listen',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverCloneController@listen',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.voiceover.clone.listen',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.voiceover.clone.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/clone/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverCloneController@create',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverCloneController@create',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.voiceover.clone.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0Rc12hskWHOgM5U0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/clone/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverCloneController@edit',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverCloneController@edit',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::0Rc12hskWHOgM5U0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::56SIA5D0UKdK9tKu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/clone/audio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverCloneController@audio',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverCloneController@audio',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::56SIA5D0UKdK9tKu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3o3mZJ0bm70yoZMO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/clone/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverCloneController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverCloneController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::3o3mZJ0bm70yoZMO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZLRReZKrqeC5Tu18' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/clone/voice/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverCloneController@voiceDelete',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverCloneController@voiceDelete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ZLRReZKrqeC5Tu18',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8ZbvnJOHxM2BMG96' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/clone/configuration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverCloneController@configuration',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverCloneController@configuration',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::8ZbvnJOHxM2BMG96',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.studio' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/text-to-speech/studio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverStudioController@index',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverStudioController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.studio',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.studio.results' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/text-to-speech/studio/results',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverStudioController@results',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverStudioController@results',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.studio.results',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.studio.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/text-to-speech/studio/result/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverStudioController@show',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverStudioController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.studio.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.studio.show.studio' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/text-to-speech/studio/result/{id}/show-studio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverStudioController@showStudio',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverStudioController@showStudio',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.studio.show.studio',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Dy9sHmLBZx7DHk41' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/studio/result/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverStudioController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverStudioController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Dy9sHmLBZx7DHk41',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZnwRDPA4vLfsuhbE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/studio/final/result/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverStudioController@deleteStudioResult',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverStudioController@deleteStudioResult',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ZnwRDPA4vLfsuhbE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7JZkfQrAjnRSbaQv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/text-to-speech/studio/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverStudioController@settings',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverStudioController@settings',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::7JZkfQrAjnRSbaQv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lVGwf8ermURxNbxC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/studio/music/merge',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverStudioController@merge',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverStudioController@merge',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::lVGwf8ermURxNbxC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oIB2awGShGJpuztg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/studio/music/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverStudioController@upload',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverStudioController@upload',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::oIB2awGShGJpuztg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JhXcl8T6UFFRLWyN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/studio/music/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverStudioController@deleteMusic',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverStudioController@deleteMusic',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::JhXcl8T6UFFRLWyN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.music.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/text-to-speech/studio/music/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverStudioController@list',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverStudioController@list',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.music.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.wizard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/wizard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ArticleWizardController@index',
        'controller' => 'App\\Http\\Controllers\\User\\ArticleWizardController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.wizard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5xPSCVKgwdQbNNLz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wizard/generate/keywords',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ArticleWizardController@keywords',
        'controller' => 'App\\Http\\Controllers\\User\\ArticleWizardController@keywords',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::5xPSCVKgwdQbNNLz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nzJrANJEH9qvHMxK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wizard/generate/ideas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ArticleWizardController@ideas',
        'controller' => 'App\\Http\\Controllers\\User\\ArticleWizardController@ideas',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::nzJrANJEH9qvHMxK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vKIJ1FiCZ2KRrjIq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wizard/generate/outlines',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ArticleWizardController@outlines',
        'controller' => 'App\\Http\\Controllers\\User\\ArticleWizardController@outlines',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::vKIJ1FiCZ2KRrjIq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uucBqAvON9Gc44xr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wizard/generate/talking-points',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ArticleWizardController@talkingPoints',
        'controller' => 'App\\Http\\Controllers\\User\\ArticleWizardController@talkingPoints',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::uucBqAvON9Gc44xr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XzMbQwRmQWGuT7yo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wizard/generate/images',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ArticleWizardController@images',
        'controller' => 'App\\Http\\Controllers\\User\\ArticleWizardController@images',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::XzMbQwRmQWGuT7yo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::skuLICWkVs91xJXh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wizard/generate/prepare',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ArticleWizardController@prepare',
        'controller' => 'App\\Http\\Controllers\\User\\ArticleWizardController@prepare',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::skuLICWkVs91xJXh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZpkCf6GTTRNtVoMV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/wizard/generate/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ArticleWizardController@process',
        'controller' => 'App\\Http\\Controllers\\User\\ArticleWizardController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ZpkCf6GTTRNtVoMV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5TjBnMKb12MqJmqa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wizard/generate/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ArticleWizardController@clear',
        'controller' => 'App\\Http\\Controllers\\User\\ArticleWizardController@clear',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::5TjBnMKb12MqJmqa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.vision' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/vision',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VisionController@index',
        'controller' => 'App\\Http\\Controllers\\User\\VisionController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.vision',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OhBvvRKcGG6vP7Gg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/vision/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VisionController@process',
        'controller' => 'App\\Http\\Controllers\\User\\VisionController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::OhBvvRKcGG6vP7Gg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0gnvWpCCxBCnrIc7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/vision/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VisionController@clear',
        'controller' => 'App\\Http\\Controllers\\User\\VisionController@clear',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::0gnvWpCCxBCnrIc7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TAikg3Kv4OQvs3of' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/vision/generate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VisionController@generateChat',
        'controller' => 'App\\Http\\Controllers\\User\\VisionController@generateChat',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::TAikg3Kv4OQvs3of',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rEIRjLNfjKmOuN4O' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/vision/conversation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VisionController@conversation',
        'controller' => 'App\\Http\\Controllers\\User\\VisionController@conversation',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::rEIRjLNfjKmOuN4O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bnrc5pVDhlhCuAbg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/vision/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VisionController@history',
        'controller' => 'App\\Http\\Controllers\\User\\VisionController@history',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::bnrc5pVDhlhCuAbg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6ft3qOz8wDNSLmke' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/vision/rename',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VisionController@rename',
        'controller' => 'App\\Http\\Controllers\\User\\VisionController@rename',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::6ft3qOz8wDNSLmke',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::opkDMyFDAAxz4Jny' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/vision/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VisionController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\VisionController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::opkDMyFDAAxz4Jny',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.chat.image' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/chat/image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatImageController@index',
        'controller' => 'App\\Http\\Controllers\\User\\ChatImageController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.chat.image',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tsydPoFyDNrpkFYo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/image/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatImageController@process',
        'controller' => 'App\\Http\\Controllers\\User\\ChatImageController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::tsydPoFyDNrpkFYo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0fQqNFY36scPnuUe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/image/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatImageController@clear',
        'controller' => 'App\\Http\\Controllers\\User\\ChatImageController@clear',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::0fQqNFY36scPnuUe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vcEdJtHKiFhW9iXP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/image/conversation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatImageController@conversation',
        'controller' => 'App\\Http\\Controllers\\User\\ChatImageController@conversation',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::vcEdJtHKiFhW9iXP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vMKRXQb2QmFv3RAc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/image/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatImageController@history',
        'controller' => 'App\\Http\\Controllers\\User\\ChatImageController@history',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::vMKRXQb2QmFv3RAc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UuvbYaoJx43MuNwe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/image/rename',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatImageController@rename',
        'controller' => 'App\\Http\\Controllers\\User\\ChatImageController@rename',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::UuvbYaoJx43MuNwe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HmasH5riqH2TWSsq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/image/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatImageController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\ChatImageController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::HmasH5riqH2TWSsq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.chat.file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/chat/file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatFileController@index',
        'controller' => 'App\\Http\\Controllers\\User\\ChatFileController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.chat.file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QhPvKi9WhfOQHdfA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/file/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatFileController@process',
        'controller' => 'App\\Http\\Controllers\\User\\ChatFileController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::QhPvKi9WhfOQHdfA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xrrm7DNGK7H25e8s' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/file/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatFileController@clear',
        'controller' => 'App\\Http\\Controllers\\User\\ChatFileController@clear',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Xrrm7DNGK7H25e8s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::itGDKlztljAiXluS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/file/conversation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatFileController@conversation',
        'controller' => 'App\\Http\\Controllers\\User\\ChatFileController@conversation',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::itGDKlztljAiXluS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7SxRe2TPFyHRSbMm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/file/rename',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatFileController@rename',
        'controller' => 'App\\Http\\Controllers\\User\\ChatFileController@rename',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::7SxRe2TPFyHRSbMm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9kZltrXig9KeEqra' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/file/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatFileController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\ChatFileController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::9kZltrXig9KeEqra',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tzAy5NMQJ8defccR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/file/metainfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatFileController@metainfo',
        'controller' => 'App\\Http\\Controllers\\User\\ChatFileController@metainfo',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::tzAy5NMQJ8defccR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x0wxVOQRkXglq4o2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/chats/file/{code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatFileController@view',
        'controller' => 'App\\Http\\Controllers\\User\\ChatFileController@view',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::x0wxVOQRkXglq4o2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U4wzDXlYXZ1AGhFw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/file/credits',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatFileController@credits',
        'controller' => 'App\\Http\\Controllers\\User\\ChatFileController@credits',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::U4wzDXlYXZ1AGhFw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mR5zmL71tIt3kIxM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/file/check-balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatFileController@checkBalance',
        'controller' => 'App\\Http\\Controllers\\User\\ChatFileController@checkBalance',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::mR5zmL71tIt3kIxM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JbhdxgLYfShyeX4a' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/file/embedding',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\EmbeddingFileController@store',
        'controller' => 'App\\Http\\Controllers\\User\\EmbeddingFileController@store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::JbhdxgLYfShyeX4a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.chat.web' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/chat/web',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatWebController@index',
        'controller' => 'App\\Http\\Controllers\\User\\ChatWebController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.chat.web',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ngqu21YRhfsWCp29' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/web/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatWebController@process',
        'controller' => 'App\\Http\\Controllers\\User\\ChatWebController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Ngqu21YRhfsWCp29',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0TyXinMBAHZ6rKbs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/web/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatWebController@clear',
        'controller' => 'App\\Http\\Controllers\\User\\ChatWebController@clear',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::0TyXinMBAHZ6rKbs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oim186HOi8YFH07R' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/web/conversation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatWebController@conversation',
        'controller' => 'App\\Http\\Controllers\\User\\ChatWebController@conversation',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::oim186HOi8YFH07R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hKXts4aJMjLrgXxc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/web/rename',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatWebController@rename',
        'controller' => 'App\\Http\\Controllers\\User\\ChatWebController@rename',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::hKXts4aJMjLrgXxc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::909OiyXdK7jaPxIh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/web/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatWebController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\ChatWebController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::909OiyXdK7jaPxIh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tV6goLCklJAj5W0o' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/web/metainfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatWebController@metainfo',
        'controller' => 'App\\Http\\Controllers\\User\\ChatWebController@metainfo',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::tV6goLCklJAj5W0o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y4XDBrZQQE48eyTv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/chats/web/{code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatWebController@view',
        'controller' => 'App\\Http\\Controllers\\User\\ChatWebController@view',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::y4XDBrZQQE48eyTv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DYkEMlWid7FC2AaW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/web/credits',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatWebController@credits',
        'controller' => 'App\\Http\\Controllers\\User\\ChatWebController@credits',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::DYkEMlWid7FC2AaW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EkIZxCrN0IQqDTcs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/web/check-balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatWebController@checkBalance',
        'controller' => 'App\\Http\\Controllers\\User\\ChatWebController@checkBalance',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::EkIZxCrN0IQqDTcs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iyCIsYAk3nUKC2In' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/web/embedding',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\EmbeddingController@store',
        'controller' => 'App\\Http\\Controllers\\User\\EmbeddingController@store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::iyCIsYAk3nUKC2In',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.plagiarism' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/plagiarism',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PlagiarismCheckerController@index',
        'controller' => 'App\\Http\\Controllers\\User\\PlagiarismCheckerController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.plagiarism',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s80RBPMG2IrPnvaR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/plagiarism/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PlagiarismCheckerController@process',
        'controller' => 'App\\Http\\Controllers\\User\\PlagiarismCheckerController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::s80RBPMG2IrPnvaR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.detector' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/detector',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DetectorController@index',
        'controller' => 'App\\Http\\Controllers\\User\\DetectorController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.detector',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NttOigXtErL35owx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/detector/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DetectorController@process',
        'controller' => 'App\\Http\\Controllers\\User\\DetectorController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::NttOigXtErL35owx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.brand' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/brand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\BrandVoiceController@index',
        'controller' => 'App\\Http\\Controllers\\User\\BrandVoiceController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.brand',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.brand.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/brand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\BrandVoiceController@store',
        'controller' => 'App\\Http\\Controllers\\User\\BrandVoiceController@store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.brand.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.brand.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/brand/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\BrandVoiceController@create',
        'controller' => 'App\\Http\\Controllers\\User\\BrandVoiceController@create',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.brand.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.brand.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/brand/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\BrandVoiceController@edit',
        'controller' => 'App\\Http\\Controllers\\User\\BrandVoiceController@edit',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.brand.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.brand.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/brand/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\BrandVoiceController@update',
        'controller' => 'App\\Http\\Controllers\\User\\BrandVoiceController@update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.brand.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EFWuyclLRUEVhiX3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/brand/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\BrandVoiceController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\BrandVoiceController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::EFWuyclLRUEVhiX3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.youtube' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/youtube',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\YoutubeController@index',
        'controller' => 'App\\Http\\Controllers\\User\\YoutubeController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.youtube',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bVJphyPlVg4smQK0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/youtube/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\YoutubeController@show',
        'controller' => 'App\\Http\\Controllers\\User\\YoutubeController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::bVJphyPlVg4smQK0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jBodFZK9O9HjGvBa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/youtube/generate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\YoutubeController@generate',
        'controller' => 'App\\Http\\Controllers\\User\\YoutubeController@generate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::jBodFZK9O9HjGvBa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KT7tJEIrZeCloylD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/youtube/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\YoutubeController@process',
        'controller' => 'App\\Http\\Controllers\\User\\YoutubeController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::KT7tJEIrZeCloylD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9xhML5cikl3ERbAL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/youtube/custom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\YoutubeController@custom',
        'controller' => 'App\\Http\\Controllers\\User\\YoutubeController@custom',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::9xhML5cikl3ERbAL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y1AUZD9vSIFI89rC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/youtube/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\YoutubeController@save',
        'controller' => 'App\\Http\\Controllers\\User\\YoutubeController@save',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Y1AUZD9vSIFI89rC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@index',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PaMaAacTGCc9E19r' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/document',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@store',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::PaMaAacTGCc9E19r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.images' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/images',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@images',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@images',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.images',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KbA0aciZsOsCNORf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/document/images/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@showImage',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@showImage',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::KbA0aciZsOsCNORf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.codes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/codes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@codes',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@codes',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.codes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.voiceovers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/voiceovers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@voiceovers',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@voiceovers',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.voiceovers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.transcripts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/transcripts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@transcripts',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@transcripts',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.transcripts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uolnhEuVmsBRH4bI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/document/result/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::uolnhEuVmsBRH4bI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mK05a99dZPx0qzWr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/document/result/code/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@deleteCode',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@deleteCode',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::mK05a99dZPx0qzWr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mTEJPbvI8JkvqZ4X' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/document/result/voiceover/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@deleteVoiceover',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@deleteVoiceover',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::mTEJPbvI8JkvqZ4X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AbeZExkn1TD2STgO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/document/result/transcript/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@deleteTranscript',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@deleteTranscript',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::AbeZExkn1TD2STgO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/result/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@show',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.code.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/result/code/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@showCode',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@showCode',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.code.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.voiceover.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/result/voiceover/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@showVoiceover',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@showVoiceover',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.voiceover.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.transcript.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/result/transcript/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@showTranscript',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@showTranscript',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.transcript.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.workbooks' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/workbook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@index',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.workbooks',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4ueO9wrtH1e23ofL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/workbook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@store',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::4ueO9wrtH1e23ofL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Tqb6ihLgzxZxpxUx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/workbook/result/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Tqb6ihLgzxZxpxUx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.workbooks.change' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/workbook/change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@change',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@change',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.workbooks.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.workbooks.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/workbook/result/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@show',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.workbooks.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.workbooks.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/workbook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@update',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.workbooks.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.workbooks.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/workbook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@destroy',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@destroy',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.workbooks.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.security' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/security',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserPasswordController@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserPasswordController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.security',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.security.password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/security/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserPasswordController@update',
        'controller' => 'App\\Http\\Controllers\\User\\UserPasswordController@update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.security.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.security.2fa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/security/2fa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserPasswordController@google',
        'controller' => 'App\\Http\\Controllers\\User\\UserPasswordController@google',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.security.2fa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.security.2fa.activate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/security/2fa/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserPasswordController@activate2FA',
        'controller' => 'App\\Http\\Controllers\\User\\UserPasswordController@activate2FA',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.security.2fa.activate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.security.2fa.deactivate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/security/2fa/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserPasswordController@deactivate2FA',
        'controller' => 'App\\Http\\Controllers\\User\\UserPasswordController@deactivate2FA',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.security.2fa.deactivate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.project' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/project',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@updateProject',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@updateProject',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.project',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@edit',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@edit',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.defaults' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/edit/defaults',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@editDefaults',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@editDefaults',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.defaults',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/edit/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@showDelete',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@showDelete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.api' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/api/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@showAPI',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@showAPI',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.api',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.api.store' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/profile/api/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@storeAPI',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@storeAPI',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.api.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.delete.account' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/edit/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@accountDelete',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@accountDelete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.delete.account',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.update.defaults' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/profile/update/defaults',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@updateDefaults',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@updateDefaults',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.update.defaults',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s4VfUHsL4uyA33yg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/change/referral',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@updateReferral',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@updateReferral',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::s4VfUHsL4uyA33yg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XkgVCQmPp88vuQKI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/theme',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@theme',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@theme',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::XkgVCQmPp88vuQKI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xXWlOQ8iyYdPnmND' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@emailNewsletter',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@emailNewsletter',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::xXWlOQ8iyYdPnmND',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.team' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TeamController@index',
        'controller' => 'App\\Http\\Controllers\\User\\TeamController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.team',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.team.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/team/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TeamController@listUsers',
        'controller' => 'App\\Http\\Controllers\\User\\TeamController@listUsers',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.team.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.team.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TeamController@store',
        'controller' => 'App\\Http\\Controllers\\User\\TeamController@store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.team.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.team.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/team/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TeamController@create',
        'controller' => 'App\\Http\\Controllers\\User\\TeamController@create',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.team.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.team.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/team/{user}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TeamController@show',
        'controller' => 'App\\Http\\Controllers\\User\\TeamController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.team.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.team.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/team/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TeamController@edit',
        'controller' => 'App\\Http\\Controllers\\User\\TeamController@edit',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.team.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.team.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/team/{user}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TeamController@update',
        'controller' => 'App\\Http\\Controllers\\User\\TeamController@update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.team.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JcT5hllTsyCIfDmk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/team/leave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TeamController@leave',
        'controller' => 'App\\Http\\Controllers\\User\\TeamController@leave',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::JcT5hllTsyCIfDmk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zWFa6BaLZwCBeZ4T' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/team/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TeamController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\TeamController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::zWFa6BaLZwCBeZ4T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uUvljzSZpxeU0vdP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/purchases/subscriptions/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@stopSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@stopSubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::uUvljzSZpxeU0vdP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.purchases' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/purchases',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@index',
        'controller' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.purchases',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.purchases.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/purchases/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@show',
        'controller' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.purchases.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.purchases.subscriptions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/purchases/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@subscriptions',
        'controller' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@subscriptions',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.purchases.subscriptions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xZ4bn6ymh8uj3xEs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/purchases/invoice/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@uploadConfirmation',
        'controller' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@uploadConfirmation',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::xZ4bn6ymh8uj3xEs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.plans' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/pricing/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PlanController@index',
        'controller' => 'App\\Http\\Controllers\\User\\PlanController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.plans',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.plan.subscribe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/pricing/plan/subscription/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PlanController@subscribe',
        'controller' => 'App\\Http\\Controllers\\User\\PlanController@subscribe',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.plan.subscribe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.prepaid.checkout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/pricing/plan/one-time',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PlanController@checkout',
        'controller' => 'App\\Http\\Controllers\\User\\PlanController@checkout',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.prepaid.checkout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.promocodes.prepaid' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/pay/promocode/prepaid/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PromocodeController@applyPromocodesPrepaid',
        'controller' => 'App\\Http\\Controllers\\User\\PromocodeController@applyPromocodesPrepaid',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.promocodes.prepaid',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.promocodes.subscription' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/pay/promocode/subscription/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PromocodeController@applyPromocodesSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PromocodeController@applyPromocodesSubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.promocodes.subscription',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@index',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/referral/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@store',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.payout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral/payouts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@payouts',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@payouts',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.payout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/referral/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@email',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@email',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.payout.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/referral/payouts/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsStore',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsStore',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.payout.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.referrals' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@referrals',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@referrals',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.referrals',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.payout.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral/payouts/{id}/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsCancel',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsCancel',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.payout.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.payout.decline' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/referral/payouts/{id}/decline',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsDecline',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsDecline',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.payout.decline',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/invoice/{order_id}/generate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@generatePaymentInvoice',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@generatePaymentInvoice',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.invoice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.invoice.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/invoice/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@showPaymentInvoice',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@showPaymentInvoice',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.invoice.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.invoice.transfer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/invoice/{order_id}/transfer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@bankTransferPaymentInvoice',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@bankTransferPaymentInvoice',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.invoice.transfer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.support' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserSupportController@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserSupportController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.support',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.support.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserSupportController@store',
        'controller' => 'App\\Http\\Controllers\\User\\UserSupportController@store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.support.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i8NS9wo8fCsJJDUz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/support/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserSupportController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\UserSupportController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::i8NS9wo8fCsJJDUz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.support.response' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/support/response',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserSupportController@response',
        'controller' => 'App\\Http\\Controllers\\User\\UserSupportController@response',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.support.response',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.support.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/support/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserSupportController@create',
        'controller' => 'App\\Http\\Controllers\\User\\UserSupportController@create',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.support.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.support.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/support/{ticket_id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserSupportController@show',
        'controller' => 'App\\Http\\Controllers\\User\\UserSupportController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.support.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.notifications' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserNotificationController@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserNotificationController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.notifications',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.notifications.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/notification/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserNotificationController@show',
        'controller' => 'App\\Http\\Controllers\\User\\UserNotificationController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.notifications.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UfWCgvuH16qXylXm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/notification/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserNotificationController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\UserNotificationController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::UfWCgvuH16qXylXm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.notifications.markAllRead' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/notifications/mark-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserNotificationController@markAllRead',
        'controller' => 'App\\Http\\Controllers\\User\\UserNotificationController@markAllRead',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.notifications.markAllRead',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.notifications.deleteAll' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/notifications/delete-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserNotificationController@deleteAll',
        'controller' => 'App\\Http\\Controllers\\User\\UserNotificationController@deleteAll',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.notifications.deleteAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.notifications.mark' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/notifications/mark-as-read',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserNotificationController@markNotification',
        'controller' => 'App\\Http\\Controllers\\User\\UserNotificationController@markNotification',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.notifications.mark',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'user/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'subscription.check',
          5 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SearchController@index',
        'controller' => 'App\\Http\\Controllers\\User\\SearchController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gPxIoF6eW8JI1Le1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/pay/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@pay',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@pay',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::gPxIoF6eW8JI1Le1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.pay' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/pay/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@pay',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@pay',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.pay',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0J3Cuo1J4agQ6FZk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/pay/one-time/{type}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@payPrePaid',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@payPrePaid',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::0J3Cuo1J4agQ6FZk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.pay.prepaid' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/pay/one-time/{type}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@payPrePaid',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@payPrePaid',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.pay.prepaid',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.approved.razorpay' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/approved/razorpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@approvedRazorpayPrepaid',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@approvedRazorpayPrepaid',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.approved.razorpay',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.approved.midtrans' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/approved/midtrans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@midtransSuccess',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@midtransSuccess',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.approved.midtrans',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.approved.iyzico' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/approved/iyzico',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@iyzicoSuccess',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@iyzicoSuccess',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.approved.iyzico',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.approved.braintree' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/approved/braintree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@braintreeSuccess',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@braintreeSuccess',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.approved.braintree',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C1yYZjoIir83Pz4M' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/approved/paddle',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@paddleSuccess',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@paddleSuccess',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::C1yYZjoIir83Pz4M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.approved' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/approved',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@approved',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@approved',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.approved',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.cancelled' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/cancelled',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@cancelled',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@cancelled',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.cancelled',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.subscription.razorpay' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/subscription/razorpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@approvedRazorpaySubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@approvedRazorpaySubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.subscription.razorpay',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.subscription.flutterwave' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/subscription/flutterwave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@approvedFlutterwaveSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@approvedFlutterwaveSubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.subscription.flutterwave',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.subscription.stripe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/subscription/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@approvedStripeSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@approvedStripeSubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.subscription.stripe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.subscription.approved' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/subscription/approved',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@approvedSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@approvedSubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.subscription.approved',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.subscription.cancelled' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/subscription/cancelled',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@cancelledSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@cancelledSubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.subscription.cancelled',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.stripe.process' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/stripe/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Services\\StripeService@processStripe',
        'controller' => 'App\\Services\\StripeService@processStripe',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.stripe.process',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.stripe.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/stripe/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Services\\StripeService@processCancel',
        'controller' => 'App\\Services\\StripeService@processCancel',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.stripe.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
