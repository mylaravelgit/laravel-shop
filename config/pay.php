<?php

return [
    'alipay' => [
        'app_id'         => '2016093000631586',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAiYeXUKz4cYTUf6XvbFZfGhCge7vr0x9W8i0c+F0U6AZCjZziD3+MpUCY4I05/HCiFrZ3EORL5I3eLQ2uVht7oBLVxMowewjyKC3ycyvoRJm89gxTvpaZXrEYWZgVRBgsM2Sqr9DhpDM2mmSSALlu1VP3rZTCp1EsM+6yRpL9DzXS+6rejtAdseqkcvXhXDmdD9NPlWBTLOF4e1RPFbaZC93mTseAmCgebmZWG4X+nELStK2aealU84BYmM1kJDg7927HahVP3Wj4z5KNaXtjahm58eD6IU0Ovo9nKbNJMx0P1JSGaKjcBzQ/Diijqf2UBT6e1ED56P3o3J/1qKvQbwIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAtdLRNz84fjPA+4pYSTog+QV8ynbVbkXx/s6PUjLG+UySxSDILNXiSUKX7L5FLVTb44wHIAv1QjROD0FsxN2c1IBFjMDjPsRHBMASAHnPX5EXthCYLmiCtkyB/71B9v8Evq7LTI88uCSxQib1mIaO6wt06FcmTh2pFrEsHHw6y7Gm22SmkCz6QnRqsxdwBowvd6NF8B7LRksnJcb+efi8fpzFcL5TAun1vNbddlHLx3YLGV4kBKJxDUjJk+edf+2DgRpotXQGERi/DEMX4Lc2ZVdgpu8VpjVNk21cRE3g4O11KNo4CyqVD+L9+UwK20GP/oIkA+99JQoZ5BUDTq3L+QIDAQABAoIBAHNGW1pZfKmWik1v4pVagzkeH4YFXT9ynQBdWURV6Qx5XbwZEpBKchLcY5G2+AjLejWDu6i3rCDzJGJLqngNwLaBNJcOW4SZ0CTU2RTwJWeDh7LoRnN10xlc3DaVeNLtz8ZM75t0XJyqtq8oICE5fjbKpq3/QsvXxjIa1cqhgG1O/H8v3qXcD/kphod4wrVHpmtBWHrLZex8AaSQmp9goET88YWK1ujAUEUSVY1GOBOFlrcwbcKe6hb+MRMOjwIk+Zl9fHJDdgMtTCBhJXr8WWLs2yw5/h4qVDNBb+Z3cvjm4HcpSYpawGc5GTZqMTABZum8rgSXT29VqnKpFaqPZfkCgYEA4tW6XggoP7HB5mXJbyKRjDLP6ckqqih/rzDB8GLJvn9/7TCgCZL2XF67D7e7M+7+yEgjGiyPCljzxxOBwG59QfXkp04AlkjD8PGC+6RRSnkhqr9RcotA9EV+8qq3X+ZpRdj5g2LnBSZmSF4aNMWW/QwmZPhEfJ7Fj6jTGuKrNYMCgYEAzTOKIorvPUZYsApsKvi9gffGQ0WspGBchBdcbTVEdcxcc0oJI3+0Wo0gp6h1XQUAXz2TSU+QHOSowMpPf2/6Eo4i1BlQg1J1XY2AhuxgeQUTO0oHRpySeA03OzsgqsyKwbDYVZqME06b0i9jheagr4pMH3Lyb3jqah31GYd+u9MCgYEAhmlDH8kRoHyCezXBYNtJB5xsWwnbAC0zS+pGYV0IUptWgIQZsNKmrSFtEuk6QpHR43frZO0WbXk8KrDCZ/aQvm8oaILuEh9YDAPwK5C4orqYWoc3ifo+KQCtMro6ItdzdfIWF+aZIhIY9bTdLnwO9i8m6Rm762RhiLjvLrU14mUCgYEAk0uStVbrgh1z3fGtUW85gQidbX6e/WMaJcsrEk0xNimalzsmsi+iA3nYXeDDViEX8kWd6vrMpKDSLYlLZVu4swcKIxuEuq8/BgdjofYdDeHBu0ZZUKtlS/2YjtDTkya912kc8N29/MHpggd4Ng6lezwXhl+ZfMDb645TeJ7VLvcCgYBDyOZzGxUFAZIWxInKElN1VD+6V9t1Ic4RGy135Eo3UTXlRJC8zCLAtfzijP/T1M+9lqQYeopVhZghOqmZ0gTv64Ie+3C9uKKkUFBvMX3Hn8m6gNhhRfere1HG0JWb8coajUxEIRI7NDNAsxDd+/I0hA/e6Ir6JvJw1MRgd0swSg==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];