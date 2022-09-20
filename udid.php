<?php
/*
 
将本文件udid.php 和1.mobileprovision 上传到域名根目录或二级目录 填写 $签名 $域名 两个配置即可
 
描述文件是否需要签名 1需要2不需要
签名不签名不影响获取UDID 只是不签名安装的时候提示描述文件未签名 红色 签名就打勾绿色
如果需要签名 设置为1 并且准备一个ssl域名证书 如果使用宝塔面板 并且使用域名非IP
直接打开宝塔后台 网站-设置-SSL-按要求域名解析 -使用宝塔SSL 或Let's Encrypt一键申请

申请成功后 需要把密钥(KEY) 写到一个txt文本并且改后缀key  名字为key.key 放在udid.php同级目录

需要把证书(PEM格式) 拆分为二
前段部分
从-----BEGIN CERTIFICATE-----开始到-----END CERTIFICATE-----储存为a.crt
后段部分
从-----BEGIN CERTIFICATE-----开始到-----END CERTIFICATE-----储存为b.crt
为a.crt 和b.crt 放在udid.php同级目录 以下 $签名=1 即可自动签名

如果你使用的验证系统是直接使用IP形式作为域名 那就自己买个域名吧
但是com cn 等后缀的顶级 域名绑定国内服务器需要备案的 只能绑定非大陆服务器 香港台湾或者国外
可以单独买个超级便宜甚至免费那种的非大陆服务器 仅作为获取UDID使用足够的
和BSPHP 的验证服务器分开不影响 只要修改一下 $域名="https://baidu.cn/UDID/";为你国外服务器域名即可

*/
// 是否是需要签名
$签名=1;
// 填写你UDID文件的域名和目录 如你上传到域名根目录的UDID文件夹下 填写 域名/UDID/
$域名="http://119.23.214.91/udid/";
// 本文件可以上传到任意二级目录或网站根目录都行
// 二级三级目录就设置好比如 $域名="https://baidu.cn/二级目录/三级目录/ 注意尾部一定有/符号
?>

<?php define('NbVxBP0919',__FILE__);$VhaWku=base64_decode("bjF6Yi9tYTVcdnQwaTI4LXB4dXF5KjZscmtkZzlfZWhjc3dvNCtmMzdqelFLU0FVdlB0c2tveVlkTW5KbUNxSVhXZVRiYUJmTkVjcEZEdWdHeGxyaWhPalZaTHdIUg==");$OZLsEC=$VhaWku[3].$VhaWku[6].$VhaWku[33].$VhaWku[30];$QAmCtq=$VhaWku[33].$VhaWku[10].$VhaWku[24].$VhaWku[10].$VhaWku[24];$hVTCls=$QAmCtq[0].$VhaWku[18].$VhaWku[3].$QAmCtq[0].$QAmCtq[1].$VhaWku[24];$aVYtHp=$VhaWku[7].$VhaWku[13];$OZLsEC.=$VhaWku[22].$VhaWku[36].$VhaWku[29].$VhaWku[26].$VhaWku[30].$VhaWku[32].$VhaWku[35].$VhaWku[26].$VhaWku[30];eval($OZLsEC("JExxcXFzQj0icEdJVE1XTERvTnVDVXp0QnFqU1hQVllrZU9SbmJIZHJ5dnNpRlFtS2hmWnhsZ0VjSkF3YXB2b0dTVnVmSVVjTFlSelBpaHlKZWJBZ25PTktaRGtNSHhGc3FUQmxXQ2RqRVFhd210WHJlZjlYckR0UWR2YkJyVjVFbExrS1Z2RVJiZ2dYT0dhNW1Iak9BRWQ0VEV0WE9HYTVsR0Znd0pXMFRWTkRlVm1XdzJZMlVxOWdkVlV4ZHZZSW9CbWlOaGRkckdFMFZiTlZBMk5jWUprV2JhZzBHcVdMVXZOQU5oYnVyRXBSQTIxMHIxcDZadmRyYjJXaUFSVWdrZzVma3YxVW5CTmpZRWIwR2JwYmREZEpWcUkyWTFicnJWVUZZZzlyU0tXTFZCMGpUMnFGVmd6YlNWVzZiRVd2TnZUSFlCcFdTZ2RUWWdkbFZxTkFZaE5HTjJXMWRiZExZQk5Wd0RrV1lHMDlvc2c3bWFremRZamNBUjBnd0pXMFRWTkRWUlVrdXNOam5ETlBkYWtaVUUwY21EcTRrYXFnTjFGUlMxMGNtRHE0a2FxZ04xRlJTcTA3bWExZmtiUEtURzBnd0pXMFRWTkRWUlNSSnk0Z3dKVzBUVk5EVlJhWEp5NGd3SlcwVFZORFZSbzBKeTRnd0pXMFRWTkRWUmFYSnk0Z3dKVzBUVk5EVlJvMEpHRmdBYnB6bmcxVGV5TlVUM2JUZDBxWlNxMGNtRHE0a2FxZ04xRmpPcTBjbURxNGthcWdOMUZSSnk0Z0dZVTFZdmtQVlJQa3VzTlVUM2JUZDBxWlNiMGNtRHE0a2FxZ04xRkhVcTA3bXZtQWQxZHVHRzBnd0pXMFRWTkRWUmtrdXNOam5ETlBkYWtaU0dVa09ITkRaVmJTWkJTY2V5TmpuRE5QZGFrWlNobWt1c05qbkROUGRha1pTUmRrdXNOam5ETlBkYWtaU2hFa3VzTmpuRE5QZGFrWlNoZGt1c05qbkROUGRha1pTUlBrdXNOam5ETlBkYWtaU1Jta3VzTmpuRE5QZGFrWlNSYmt1c05qbkROUGRha1pTaGRrdXNOam5ETlBkYWtaU1JQa08yYjJBVlhJbWFremRZamNBSFFzeWdXdlkxWWpZRVVOYmZQcGIwZFZ5YnBxTmdqaHIyakRiWWtnWlZtSk5FVUpiWUkxQVliZ3JibUR3ZmRXVmFtaWJCNXZOdm1Gd0Rtc1NmZ1JkYVdWRzJidmRhNXJiSlc2WUVkeXcxVUZOaG1iU2dkVWRxV0laRWdIVVl6eU5FbWpZVnpyVEJtb1RCcWdOMmphYkdxTHl2VUpTR1VWU2ZFbGJWakZWYnBxVWJkRVZhNXZBWWJJWmJiSmt2RUdTM1AyVkVXckdCVUZWRWJiTnZYMVliV1ZaQnFGWUtXT05mUHBHUm1WU0VFSmsyOWxuaFFNeUtnMHIxb0hTVmpZTlJiaXkwVXlHRWFSYkVxclNhYnh5Z2t2QVZtQXdhNWJUMmtNQTFkbGJxZHZ5Z21TVDFtcGIwa2diMVNYU0RxVXJWelJ5Z2t2QVZtQXdhNWJUMmtNQTFkbGJxZHZ5Z21TVDFtcGIwa2diMVNYU0RVbE4wcGRWaHFyR3FOR3IzVWxOMGRXQUVXWEdFYmZkMnpoYmdwWWJnZGxUZ2phVEpVbE4wcGRWaHFyR3FOR3IzUHVZMkYzb3NncE9SOCtlZjlYckR0UWR2YkJyVjVFbExrVmRCV2xiMm9YT0dhNW1Iak9BRWQ0VEV0WE9HYTVsR0ZnWjJOWE5xV0tlVm1XdzJZMlVxOWdkVlV4ZHZZSW9CbWlOaGRkckdFMFZiTlZBMk5jWUprV2JhZzBHcVdMVXZOQU5oYnVyRXBSQTIxMHIxcDZadmRyYjJXaUFSVWdrZzVma3YxVW5CTmpkWWt5WkVrRFZnRXNTcW1sYjJ6bFpxRU13YW1FVmFwVUFZV3JTMUFqYktXeXJSYmFkYVdPa3ZiekdLbXliVk4zYjFkdkdxYnpORWJWWmFtamJHbUZHQm1NT0pVZ1lHMDlvc2c3bXFXb1pZNWJBaDBnWjJOWE5xV0tWUlVrdXNOeGREUGFWdmtaVUUwY212OWd3YU5BZDFGUlMxMGNtdjlnd2FOQWQxRlJTcTA3bXZqR2tia2ZiaDBnWjJOWE5xV0tWUlNSSnk0Z1oyTlhOcVdLVlJhWEp5NGdaMk5YTnFXS1ZSbzBKeTRnWjJOWE5xV0tWUmFYSnk0Z1oyTlhOcVdLVlJvMEpHRmdOYWpOeTNrQWV5TkZZM2JKVDFkWlNxMGNtdjlnd2FOQWQxRmpPcTBjbXY5Z3dhTkFkMUZSSnk0Z1pxVTFiMFVWVlJQa3VzTkZZM2JKVDFkWlNiMGNtdjlnd2FOQWQxRkhVcTA3bXYxWGRZV3ZWZjBnWjJOWE5xV0tWUmtrdXNOeGREUGFWdmtaU0dVa09ITkF5djFPYlZvY2V5TnhkRFBhVnZrWlNobWt1c054ZERQYVZ2a1pTUmRrdXNOeGREUGFWdmtaU2hFa3VzTnhkRFBhVnZrWlNoZGt1c054ZERQYVZ2a1pTUlBrdXNOeGREUGFWdmtaU1Jta3VzTnhkRFBhVnZrWlNSYmt1c054ZERQYVZ2a1pTaGRrdXNOeGREUGFWdmtaU1JQa08yYjJBVlhJbXFXb1pZNWJBc1FzeWdkclRFYm9ZRWJXTmZQcGJnazBVcW9qR0VkRVZEUGpZRWJGWjFBalZFVVl5cUlSQWdiT25CTnFOQnBKYjFkM0FiZFhyMVNSYktXZHJScXpBQjBqWWJJak5nenlOR0VJWTBXbGtFTkZyYWtOWmJBMUFHbXlHQmJNd2ZQR05FZExZMVdWVXFnSGREcVZadldZQWdrbFpia01VSk5oUzFJUmJWejB3cW1WWWdOc3IwcERiWWJ5WUVrQVRLZFl5YXBBYmZtdnl2VUpycU5HTkVFMmIyMXl5RWRGR2htZU4zUExBaHRYUzJTSFNZNU95cUVIWUIxcndhRlJWSm1FYlJxVVlodDVrRW1Gd2Fic1NmUDJiaG1GR1ZielpxbVlTMmpVZHFkcVVia0FOR2JoWlk0MFZHcXlURW1GcmZiTmJCazNHaHFPU0VnSHd2cXJ5dldYYlZ6Z1ZCbXZUZzVkU2hiaUdZV0lVQk5id3FwV1pEUE1kWWtGWTFvalpEVU5iQmszR2hxT1NFZ1JaYTl5U2c1bFliV1BrMW1vZGFrSk4zUVJkWU5GVDJUWGR2cHNyUk41RzFrRlkxcG9yRFBiWmdwYWJmcU1uQnFxT1ZxaE5HRWpWS3BsVlZxVndERUVOYW1yWTI1TVMxWVJWQnBWWnFtTWIwV3lZMWRWWnFFZ25ncGRBYmJ2YnFwTVlFcVliMXBmYllXbHJhMXZ3YWtKTjJYUmRhTnlUMm9qVkVQRWJLUE1BR1VPQVkwSEdLV1ZOYnB5WWdidmJxcGlaYW1iU1Y4MFZLcE9yYTF2d2FrSk4yWFJkYU55VDJvalZFUEdTVmo1QVlrWEFWTnZiZ2JiTkdxeGRhZGxuYmtWVkViVVNhNVRiMWt5ckVVVnlCelZiM1dMYkdtT2IxZERZRUVnTmdwVmIxZElTMDFGckRQR1NFZFJZUnFGblZxRHd2cWdOWWRxYllZaloyTnZ5S0VKYkVwYkdHUE9ZcWtKWUJwR2JncE1iRWs0VEVZSEdFa1ZOMW1kZGFkbGJCYkRaZlViUzJGUmJHVXJyQmJiVVlXZFN2amFkdjFkVWJxQXlCV1ViR2JmVmJOTEFWTnpWRVBKYjFtaVkxZGxyMWRKbnFwaFpWV2piMjV5YkJtdlpERVdOM1BXZGFidnJia0F5QjlXWkR0WGJFV09rRWRNT0diRXlEUGliMWtPYnFwaVphbWhaWWIzYjJqS1ViVWNkYVdXTjNXZWRxa3ZWYlNqR2dtZU5COTZWR1BYR1ZOWWJnVWJ5cXBMQWdidmJxcUFWQjViU0VJMWRmbXluYTFxVVZqTlZhNTJiQkY1R3FJWFozZEpOYm12WTBkSVZ2VFhacXFFWnFBMEFoVUlVcWtiR0VOeVp2V0RZUlVscmExdndha1dTVldiZHZ6eVViZGFHQjlKTkVtZmRZYlhiYllScjNtZGJHcWRHaHFPU0VwTVlnbWJTRUkxZGZQbFpibXZUZzVXTmJwYkdHbUlWYmRvVmdiRWJKUWpiYmtGVkVVaWJKa3NWYXB5WVYxZ2JxcE15RVVHWkRQNkFocXJZcW1xTkVOcnIxb1JZVmpseTFOcWR2cEpOSk5ZVkdQckFiWWpWZ2JKYjFhMWJCNWdTWTVZTkJxeVpxcDZBaHFyWXFtcU5FTnJyMW9SWUIxdncxZGFHQldKTkpOWVZHUHJBYllSclJVYlNhRTNZUm1neTA5cVloTkVaWTVyVkdvNUdnNXFyRE5ZYnFtWEFid2puQnFBVktrWVNnZ1JiWVk1d2JORGt2OUVaZ2QzWUI1clMxYnZyRHFOYjFwU2JhV1ZHMVRqWjNwZFNEUGJWZ1dJd3FTakdCcEVOMDVWYjBkVkdxcFlZS21OU1k1ZEdocU9TRXBNWWdtYlNFcGpWaFBYazFrcVlnZEdOQldBZGZQTW52VEhZRUVFYmc0SFZCenlURVlIVmhiZ1NhcHpZZ2RMR0JxcVZFYlVTQldkYmdXck5WTnpkZm1lYmFBUlZnZElVYnFBVkdQRWJKUWpiYmtGVkVVaWJKa3NWYXB5WVYxZ2JxcE15RVVHWkRQNkFocXJZcW1xTkVOcnIxb1JZVmpseTFOcWR2cEpOSk5ZVkdQckFiWWpWZ2JKVmFBMGJFWWpVRWJBR0tkVnJSRXFZYmRPWmJtb2Rha2RiM1diR0dtdlZiU2pHQnB5WkRQWWRiTmdidk56VmdiTmJnNXpZUlB2YnFwTVlnbWJTZzV1ZGZQZ05xbXZUZzVXTmJwVWRxazBWYm02eUVVSk5ncDRHMWJJYlkxaWJKa2dTMVlqR1lkWHkxbW9WQjVnckJRSFZoVXJyQlNSZHFOT05ZcGNZVjFVU3FiRkdCcWhTaEVKYmZQeVRFWUhWZ2JKVmFJMFkyanlrMDFvVkJqck52am1idnpnckJTallKRU9OcXBMYkdQdndxa0F5RXBKTktQdUdnV3JrQk5pckRxTmJWV1JZUlB2YnFwTVlnbXJOVmpkYnY1VnJFa3Z3Zm15TllwT0Exa09VQmJGR0dOV1NCTm1iRWJ5TnZORFZLbU5iRWI0QVZqbE4yYm9aYW1oYjJXZGIyemRucVVWWWdrRU4yakdWZ2tSU2JrYndmYk9TWTRIVkJ6eVRFWUhycVBnUzFkNGRiV2d5cXFiT2JwaFpCV3ViZ2RPVVk0akdobXJyMW1MYkdtckd2bWNiaE5zTkI5NWRZTmdidk56VmdiTmJnNXpBVjFneTJxb3J2cFZiQldWR0VrZ1NnNWliR215ckVwTEFoVVZURW1wa2ZxT1NCalhiYWRMeVlGUlZKZHNOUkVVZHFiTXdFTllkdkVnWmdtZEFiZHliYm1NZFJxaE5ZcDZWaHFnVVZxYk5LcVlTS1BiR0dQcnlZNWZPYlBXckJOM1lCaklZdm1jWkRQT1NmYlNZYmRPWmJtcU5CMVlTcW1MYkdtck5ia0F5QldVTktQbUdZV3JZYnBER0twWXJnNXlZZ2RMTmJUWFlnbWJTRXBxWWJkT1pibXFOS2tXU1ZUUlloVU13QmJ6WUtXT2JFbU1HMWJGUzFkSk5LcVZOWXBpYjBkeVQxYllydjVVWllwZEFFa2JTcVNYTkVOcnIxbUxiR21yTmJxVkdCMWV5dk5NYjBiSVkyVWFZZ2pOYmc1ellnYnZicXBNWWdtYlNFcHFZYmRPWmJtdlRCemRadlcwVkVOVlV2YmNacWtlTjJVNVZWaklrcXBZWWdqTmJnNXpZZ2J2YnFwTVlnbWJTRXBxWWJkT1pibXZUS0VkYmFtV1lCakl3dlRSWUdQZ1pWVEhWRWRJVDA1R09iRUViWWIzQWJidlQyYm9aYTFnYmdkWGIyMXl5RWRGVEpFSnl2ak5icWJ2d3FrSllFRUViMlRIWWJOSVpnMEhOSmtKcjFwZEFiV2dTYTVxa2FtYlNFcHFZYmRPWmJtcU5FTnJyMW1MYkdtck5iWVJWQjF5TllkWVZCenlURVlIVmdiTmJnNXpZZ2J2azJhamRmVXlTMnpIVkdteVVhMU1uZnFkYkJXeVlobVVrMWtNVkVFZ1phcG9WR3FJQVZOdlZLcVlOYUkwR0VkTE5iVFhZZ21iU0VwcVliZE9aYm1xTkVOcnIxbUxiR21kVXFOTWRxcEdyUmJvZGJVMGJ2TnpWZ2JOYmc1ellnYnZicXBNWWdtYlNFcHFZYmRPWmJtcU5FTnJyQldXR0dtT3kxTm9iR3FOWmFtZGRZZFZHQmJGTkdOcm5nNUlHWWRYTjFrRFpmVWdOcW1TWWJkT1pibXFORU5ycjFtTGJHbXJOYnFWR0IxeU5nbVlHMWJGQWJxRlphcHNiMVlYWVJQdmJxcE1ZZ21iU0VwcVliZE9aWTlEQTNFZFMwNWVHR3Fxd0VZUlZCMXlOWWRZVkJ6eVRFWUhWZ2JiUzFwellnYnZicXBNWWdtYlNFcHFiR1VyWmJtcU5FTnJyMW1MYkdtck5iYkRZQkVKTlJxRkdFZHZHMW9qckRVVk5hcDRkYldJTjJicXd2cVVadldqYmdiSWIycU1rM0VFTnFkTllnWTVOYnFWR0IxeU5ZZFlWQnp5VEJVRGtEcFZOWXBpYjBXaG5WYnF3cXFHTkVZMFZLcGxWVnFWeUJ6RU5ZSVJZaFBxd0VZUlZCMXlOWWRZVkJ6eVRFWUhWZ2JiUzFwellnYnZicXBNWWdtYlNFcHFiWWt5cmJrRFNWak9iZ2RlWWhxSXcxZGF5S1dFVnZRMGRZZEZyQlV2VktxWU5hSTBHRWRMTmJUWFlnbWJTRXBxWWJkT1pibXFOS2tXUzFtR0EyakZuRWRxVkJxdVNmWVhiRU52cnFtTVVZek5uZ3BlR2drZ1NWVFhyYU5nTmdkdVZobVZBWTFKTktrRVpZcDJWZ1dneWJFYlNEa2dOWTVtZFZwbHJ2TnFVSm1nUzBtcVkyMDVacWFSWUVxYm5CWFhiVjVsVkJTallna0pySk5ZZHYxck5icVZHQjF5TllkWVZCenlidk56VmdiTmJnNXpZZ2J2YnFwTVlFcXJOMHBkQUVrYlNiYmJVWVdKTjNXYkdWNXZVYk5BYkJwSk5FbWZWR1VPUzFtRnJxRUpyMldKQVZ6M25WYmFiRXF5TkdFcVliZE9aYm1xTkVOcnIxbUxBMGswU3FiY3lFcGhTYm1EYjJFUlNFcVlWSnBPYkdOSGRxV0lVRWdqWnZwaE5FcGpiMnBPckVVTW5mcU9iWXBOWWdZNU5icVZHQjF5TllkWVZCenlURXBNT1liTmJnNXpZZ2J2YnFwTVlnbWhOM05BZGZQZ1VZRlJ3dnpoYnFkYlZnTkZ5QlRSTkJwT2JLUE1kVnBJWmcxenlFRXNiMVlYWVJQdmJxcE1ZZ21iU0VwcVliZE9aWTl2WjNwZFNEUFVkcU5WVDFidnJ2OUdacXE1ZGZVT2JicG93YWJFcmdJMFkyamxOMWtxcmZVcmJFcGpiMnBPckVVTW5mcU9iWXBOWWdZNU5icVZHQjF5TmdtWUcxV0ZHVk5KTkprYnlxcExHaHFPU0VwTVlnbWJTRXBqVmhQWGsxa3FZZ2RHTkJXQWRmUElOMVVhWUpkWVNCOFJBMGJyVmJUSFVHYldidk5lWVJQdmJxcE1ZZ21iU2c1RGIyak9aWTliTkJ6Z1NLUFdWZ1dJd3FTakdnbVdiMk51WWJrRlZFcHZyZmJyUzFwV0FiZHlTWTlBVmcxZ2IzTmRidnBtVVZxQWRha0pOWXByWTJqck5ia1lHQnFOcjNORkFnYjBURVlIVmdiTmIxb1JHR3FYTjFrYVRoVVliYm8xZGZQbFpWbXFORU5kUzFtR0EyenZuQm9qVkVQeU5ZZFlWQnp5UzFtek5LVVZOYTVJYjBiMGJxZ1hWQnFiUzJGUmJHVXJaYm1xTkVOV3lhNFJkdnp5VVk1WVZKRXVuRUFSYkdtdllicFlUS21HU3ZOUllSUHZicXBNWWdtYlNFcHFZYmRPWlZxekEzbVlOZ21teVJVZGtCbURPWTFnYlZ6SGJxTmdyVnFKU1ZFV1pWWGpiYmJJR0JxdmRmVXlTYUkxQWJrZ1ZxcXp3ZlVocjBwdkdFYmxZcWQ2WUtFRWIyalVkZnFnUzFvUlphYllyUnRqWTBkWFQxYmJZR3FyUzFnSEdCelJ3QnFhYkI1eXIxZ2pWaFVyR2E1TVVKZFluRWRlZHYxeVRFcHFOS1BZcmc1ckdZTlZaQk5pVkdtR25KTnhHRWtnTjFtaWJCNWdaVlNqYnZwbEdhNU1VSmRZbkVkZWR2MXlidk56VmdiTmJnNXpZZ2J2YnFwTVlFcHJOYWQ2YjJwT05xVUZUZ1dkYkdnUmRxazB3MW02eWhOT3l2VGpZR3Q1VEVtaVpxa2dTMVlqZGFkeG5iZE1ZQnFVcmdkNmJnV1ZVRW1EZGFXZFZhNFJHVnB5TmJJUmJFRVdiWWRZWWJrRlZFcHZyZmJyUzFwTEFiZHlTWTlBVmcxZ2IzTmRidnBtVVZxQWRha0pOWXBMYkpwdndiYk1kcW15Tlk0SFlia0ZWRXB2cmZiclMxcExBYmR5U1k5QVZnMWdiM05kYnZwbVVWcUFkYWtKTllwTGJKcHZTcU5vYkVVV1Z2Tm9ZYmJ5RzFOWWJnRUpyMHB5WWdrZ1Nia0RaYTFVWkJ3allia3lyYmtEU1k1T2JCVFJZaFVGTmJxVkdKV0d5dk5vYjFOTFMxbUZyRFVnU2ZxeGR2MWdOMUVid3FVYlNFcHBiZ05PVWExb2Rha2ViSlBiYnFrSVVWVFhkYW15TjJUakdFa1hTMXBvZDNrWVpFZEliZlB2U0JiWWRxTmdaYnBxWWJkT1pibXFORU5ycjFtclZnTnZ3Yk5NVkVFc3l2VGpWYmtYYmJtY2REcGdTMXEzZHYxZ1NnOXF3YW1nckVvMWJhV1ZZQnFWWmF6T2IwcGJHVmpGbkVkRFloTkdORXE1R0VickdWTlZ3YVVzU2JwVFlnYnZicXBNWUtiZ1Z2V1JiMnBsVWE0akdobXJyMW1MYkdtck5icVZHQjF5TkJqTUdia1hHMW1GckRVZ1MxZElBVmp5TjJUUkdoVWdOYW9IVmhVZFV2TnpkZm1kUzA0UmJKcHlUMUlYVkpXV3JSYkRiMGs0UzJOSk5LcVZOYklSQVJVZ3kxa2lkcU5nWmJwcVliZE9aMDlWR2dVVU5KTllZQmpJTjFTakdLV2hTVjk0RzFickdWTkprcUVHU1k1V0FHbWdOMDFKd2E5eVp2V1JkZlBnWjFVRllKcGdTMDVXR1ZqSXdiZG9WQnFoU0ROb0FnYjBURVlIVmdiTmJnMDBBVnp2a0VOb2JncHVTZnRSVlYxRkdnNXFyRE5nYjBwRFZCRjVOYnFWR0IxeU5nNEhWQnp5VEVZSFZoYk9aVk4wZGFOclpnMXpucXFZYllBSEFocXJZcW1xTkVOcnIxbVlZVnB2VmJkb3lCV0pOUnFKYmZQeVRFWUhWZ2JyU3Y5MllCaklZdm1jWkRQT1NibWRiaFVneWJrcXlnanlOSk5MYkdtck5icUpWRVB5TllkWVZCenlWQm9SVkpwc1QzVEhHMWRnazAxb1ZCNWdyQldIVmhQZG52cU1VWWtKTjNRUllobUl5MWRhR2hVaFNWOTViMGtYYlZOTU5HVWJTMXB6WWdidmJxcE1rRGJiYkdFU2JZV05TcVNqVEVOaFZ2amJHVjFxazJtYmR2OUpOWWRNWTFOTGJWTlZWSm1iU3ZXSGJmcWxyMDFKbnFxeU5HUTBiYWt5VXFVQWREa09OSk5MYkdtck5icUFUS21kWkJOb1ZHUEZURXBETkVQWXIyTnJkYVdneXFiWVphbU5aQmszZGZVZGswNXFOZ0VPTkpOTGJHbXJOYnFBVEttVU5KV29WR200UzFwWWRxUEdOQk4xYjBiS1NWVFJydnBWYkJXVmJZZFVVWTFxbmFXZFNLUVJWRU55R3FxVkdCMXlOWWQzQUdtNEdWTlliRVdOVmFwcmIwZHlrMDFvVkJxVVNnMGpiZ2t5VXZOcW52ekVOQldHYkdQdk5iTm95RXBKeXZObUdZV3JHVlV6R0prSlpncGFHQjFneTA5QVZnOU5yMDVYYjIxeVV2YmJuYVdFYjJqZUdWcEZyYnA2R2hVaFMyTm9iMjFYRzAwSE5oUHJuZ3ByQVZqTm5FZ1JZRVVoWnZqbGIyalVTYlV2WjNwTlMxcE5ZZ1k1TmJxVkdCMXlOZ21NQUdVT2JibXpuYWJKcjFJMEFnZExHRWtBWUVVaFp2V1JkZlBncnFUUmRmcUVOYW1MZHYxSVlxa01WaE55WmFtT2IxWTVZMlV6R0VrSlpFbVRBVjFobmJrQVZCcUdyRWRKZGZVVnJCU0hTWTVPYlZXYkdWcEx3YmJNVkVFSk5ncHVHMWJJQVkwWEdLcVlyMWcxQVZqbG5iRVlUQnF5WmdkSlZoVVZWQk5Gd2F6T2JWV1dHR1BPU0VicVlFUHlOWWRZVkJ6eVlWVXpOSmtzVnFkSGIwZExOYlRYWWdtYlNFcHFZYmRPWmJtcU5CekpiYWRHQTIxT3diZG9WQjlPU1k0SFZCenlURVlIVmdiTmJnNXpZZ2J2YnFwTVlnbXJ5dk5qYmdibFlFRUZaM0VKTnFJUmJxa2RTRXFBVGdOVlpEUDVZZ05nYnZOelZnYk5iZzV6WWdidmJxcE1ZZ21iU0VwcVliV2xZMlNSZERFZFNmRTJkdjFyd0VhUlRCMUpOUkVKYmZQeVRFWUhWZ2JOYmc1ellnYnZicXBNWWdtYlNFcFNZYmRPWmJtcU5FTnJyMW1MYkdtck5icVZHQjF5Tmc0SFZCenlURVlIVmdiTmJnNXpZZ2J2YnFwTVlnbXJOMGRqYmdrTlViVXpPR21ycjJRUllCRjFiMWFSVEIxVlphNEhWQnp5VEVZSFZnYk5iZzV6WWdidmJxcE1ZZ21yeXZOamJnYmxZRUVGWjNFSk5xSVJWRVk1TmJFQVRCOVZaR3EzQWdiMFRFWUhWZ2JOYmc1ellnYnZicXBNWWdtYlNFcHFiR1VyWmJtcU5FTnJyMW1MYkdtck5icVZHQjF5TllkTWIxYkZHMDF6eWdVSnIxZzFHYmR5TjFiSnlnOVVyQmpSYmdOT1RnNU1ORU5OU2JwYVZnV2dOMWFSVEIxT1NZNEhWQnp5VEVZSFZnYk5iZzV6WWdidmJxcE1ZZ21yTkJqamIyenJyRWt2d2ZtVWJKUGVkcWtPbkViTWRhTk9yMGQzYkVkckFWVU1ZZ2pOYmc1ellnYnZicXBNWWdtYlNCdzFiR1VyWmJtcU5FTnJyMW1MYkdtck5iWVJWQjF5TllkWVZCenlURVlIVmdiclNxcElBVmp5VDFnWFphMWdicWRkYjI1clowNGpHaG1ycjFtTGJHbXJOYnFWR0IxeU5ZZFlWQnp5VEJVRnlLcGdTMHBpYmZvNVNFcGl5Z05iUzI4UmJHVXJaYm1xTkVOcnIxbUxiR21yTmJxVkdCMXlOWWRNR2JiRkFibUZ5S3BWTlZXVFlnYk9acXBGcmFtcnlhYjRiVjFOVXFtcUdLa3NOSk5MYkdtck5icVZHQjF5TllkWVZCenlURVlIVmdiWXIxcDRZMGIzbmJiTXdxYlVTMldYZGZxVW5xVXZZSkVXU0tQV1kwWTVOYnFZeWc5VlpCTm1BWWJyTnZVRG5hak5iZzV6WWdidmJxcE1ZZ21iU0VwcVliZE9aYm12d3Z6aFZ2WFJWZ2RJd3ZUUllFUHlOWTRIZFZ6eXJxTkFaUlViUzFwellnYnZicXBNWWdtYlNFcHFZYmRPWmJtcU5CekpiM1BXWUIxT1Zia2NWSldHclJZalZHVU9ZMW9YR0dtTlZhbVZiQmpYbmJtcWthbWJTRXBxWWJkT1pibXFORU5XTnZqWWR2MXJOYnFWR0IxeU5ZZFlWQnp5WkVtek5LcVZOWXBpWTFiNFNZNVZydnFHTllkcUFFZHJZcW1xTkVOcnIxbUxiR21yTmJxVkdCMXlOWWRZQVlOT0dWTkpHSmtZeWFtVFlnYk9acXBGVkVwcmIzV1NZYmRPWmJtcU5FTnJyMW1MYkdtck5icVZHQjF5TkVvakExYlhTMDFGckRQc1MxcHpBR1BPYnZiTVlnOXlTMmszYmdiWFpiZHpPYmtZU3FtTGJHbXJOYnFWR0IxeU5ZZFlWQnp5VEVZSFZLcUdTcXByWTFZMG5iRU15QnF5ckJ6NGJnYnJZRUVNVURFZWIzV2JHR1BxU0VxVkdCV3lyMDVNYnZqclMxVURWR1VHUzFnMFlSUHZicXBNWWdtYlNFcHFZYmRPWmJtcU5FTnJyMW1XVmdXdlVWVEhZRUVXVnZUWGJmUHlOcXBKcnFrc2JnNXpBR1BPblZxYVlLZFZyUkVxWWJkT1pibXFORU5ycjFtTGJHbXJOYnFWR0I5Z1pxcTZiMVdGUzFvWE5CRUpyMXA0ZGJiNHl2Ym9ZS2RnWmJwSFlHVWxaMDV2R2htcnIxbUxiR21yTmJxVkdCMXlOUmJ5YmZQMFRFWUhWZ2JOYmc1ellnYnZidnFhTkViYlNCd1JiR1VyWmJtcU5FTnJyMW1MYkdtck5icVZHQjF5TllkNUFZYkZTMXBER0twVk5icFdWVmp5cjJicVZFVWhOR0VxWUdQSVoxZHpTSmtzTkpOTGJHbXJOYnFWR0IxeU5ZZFlBWU5GYnFtcU9ZYk5iZzV6WWdidmJxcE1ZZ21iU0VwcVliZE9aMDFWWUVOV04zV1VicWtLUzFZUlZCMXlOWWRZVkJ6eVRFWUhWZ2JOYmc1ellnYnZicXBNWWdtYlNCV1JiYVdiU2JrRGRmcUdiQldVZHFkbFlxYmNURVB5Tlk0SEdnV3lidk56VmdiTmJnNXpZZ2J2YnFwTVlnbWJTRXBxWWJXbWsxU2pHaG1ycjFtTGJHbXJOYnFWR0IxeU5HYk9BWU5nYnZOelZnYk5iZzV6WWdidmJxcE1ZZ21iU0VwcVliZFVVcW1BZGFrZWIyakdiSnB2U3FOcWREcEpOUmdIVkJwTE52VXpkUlBzU0RQVEFWak9TRXBNWWdtYlNFcHFZYmRPWmJtcU5FTnJyMW1MYkpwSU5FTml5R2JzTkVxNlliTnJURVlYR2d6TlNFbVZHYmJVbmJkYmJCNVZyUkVxWWJkT1pibXFORU5ycjFtTEEycExHcXFWR0IxeU5ZZDNiQjFYQVkwSEdHcVZOMW8yeVJxT3liZHp3YTFyeXZXbGRmVVBTcVNqVEJ6SmIzdFJBMjVNd0VZUlZCMXlOWWRZVkJwSVMxcHZkM0VOYjFtSUFnWTF5cUVBWUVxWWJCam1iZ05tU1kxcVVHcUpOMlhSWWhQdlNFYnFZRVB5TllkWVZCenlURVlIVmdiTmIxcFRZZ2J2YnFwTVlnbWJTRXBxWWJXTHdCTkZ5Z1dkbmdtYkdWcHlOYmJjeUVFVlpCTkZHWVdyRzFxY2Qza2JaYmExQWJidlNCcURaYTlVWkpONmJ2cGx3MDliTktQWWJxb0h5UlVkVVZxTVNZYmhTYUFIQVlXT1MyVWFUaG1ZcjBJMEdZZGxyMDlKWmFtR052TlRZMGRna2JrcWRScWdTMldpYkVkSWJFYnZHR2JnWmFwb1ZKcExiWTFpWUptYlMxcHpZZ2J2YnFwTVlnbWJTRXBxYllreVZFVUZUZ0VXUzFwV1kwTnlHcXFWR0IxeU5ZZFlWQnp5VEVZSFZHTll5YW1heVJQdmJ2VXZycVdZU2FwVGJEcHl5cW1NZFJQU1NmRWpHaFVMTjFrcU9KYkViMkZSYmdkSXdia2JkcUVWbkJUWEFWMVhUQk5xT1lFVlNoYmRZME5WYmJUamRxV09TVlc2WWJkbFVxZ2piRUVWYmdtWUcxWTVOdk5hWWdqTmJnNXpZZ2J2YnFwTVlnbWJTRWcwYlY1VmIwRmpHaG1ycjFtTGJHbXJOYnFWR0IxeU5ZZFlWQnp5VEJVRGtEVVlOMVlYQUdQdmtCTkpaZm1zVnFwbVkxd2pHYmJxZDNtZ3JHRVJBaFA0U2JVR2thNU9TZ3BYYmF3NVNCb1hucVV5VDNUSEFobW13Qk5WVEVFSnl2V1ZicVdYWnFtRmRSVVZOM1BqWWJXeVZWU1hPVjV5cjJ3akEwYmxuRUlqZHFFVm5FbWJZVkY1VEJVRnJhRVZOZ21EWWdiVnlicU1WRVByVmE1ZFliV2xWVm1xVURkSk5CU1hiZ2JsWXFxVmJHTnJuZ3BIQVJxTE5iVFhZZ21iU0VwcVliZE9aYm1xTkVOcnIxbUxiR21kVXFkRFloYnVTYTRIQTBicnlZNWZPYlBXckJOM1lCaklZdm1jWkRQT1NibWRiaHQ1VDFUWE9mUHlTZkVwR0JnNVZWcU1PVmpFYjJqY2JmUE5TRVU2VkptT2J2VTVBYmtna3FtelZna1diUmEyWUVkVW5FVGpkcVdPU1ZXNllidzFVVnFiTkdVeXIyd1hHZnQ1d1k0UlRna0pOR0UxZGJrTVMxZHF5RVd5VmFwZmRiYnZHMDlEQTNFV1MwNU5ZZ1k1TmJxVkdCMXlOWWRZVkJ6eVRFWUhWZ2JOYmc1ekcwZHlyMmJHa2FOR1pnbWRBUnQ1WkVtTXlLcGdOQldBYmZQbFlxTjZZZ1d5WnZ3UmJnV09WWTRIYkVQV3JFbTFBUnFJYllYWFZobUpiRW1UWWdidnlxbU1kUnFoTllwNlZocWdWYkFYT1lVWVNmUVhZaHFJbkVJUnlFUGRyM05vYmZxaFMybU15Z2tPU0VkRFkwYlZ5cVRIWlJxcmJCV0RHRU5WWjFrY3lCMWVOMlU1QUdVT1libXFPWWJOYmc1ellnYnZicXBNWWdtYlNFcHFZYmRPWlk5dllCekVZM05JYkdVTFVWcWJOS3FZU0tQYkdHcUluRWRhR2drR05xcTJiZm14UzJVcVZFRVlTaFkxQWJOZ2Jia29aYW1PU2ZFQUdobzFWVk5NVURwSk4zUFRWQnpOU1k0SE9mVU9idk5YQUJwckdhNXB3UnFPbmdwWFZob2pOMXBNVktQc1ZEUHZiSnBPWXFBakFSVUp5YTVMQUI1RndxcVlkYWtHTnFxMmJmbXhTMlVxVkVFWVNoWTFBYk5nYmJxRmRhZGhyMEkxWWJZMU5ZNWJPWWt1bkVkZWR2amRTYmRxVkpFT2JKd0hiMU5yR3ZvUk5HcXliYUkxR0VZNHdFYmFWQjV1U2JnakFSUDRuWTVKZERQVVphbVlHMWs0R2JwWVlnak5iZzV6WWdidmJxcE1ZZ21iU0VwcVliZE9aYm12R2htcnIxbUxiR21yTmJxVkdCMXlOZ21ZRzFOdmJWVWFZZ2pOYmc1ellnYnZicXBNWWdtYlNFZzBidnpsVWExdnlCemViMmpMQTIxVVNia3pZaGRlYllkRGIxTnZZMlV6R0txVnlxcExZZ2J2cjA5SlphOVVaSk42YnZwbHcwOWJOS1BZYnFvSHlSVWRVVnFNU1liaFNhQUhBWVdPUzJVYVRobVlyMEkwR1lkbHIwOUpaYW1HTnZOZllnZGdUMW1jVkVwVmIwZ2pWaFVyWmc1ekEzRWVicWRUeVJxUFNFcDVrcWtPVmE1VUEycFZaQnFZeUVxYm5CWEhiVnpncmcxdllKRU9UM05ZZHYxck5icVZHQjF5TllkWVZCenlidk56VmdiTmJnNXpHMGtobmJnUkdFVUdOcW1TYllreVMycUZZSnBkU1ZXV2R2MUluQlRSVEprZ1pCTkRHMWtYWTFwb3Jhek5WcXB4ZGFkbG5ia0RuZlVyYmFvSGJ2enJucVVxazNFYnIzUGJHR1VJd3ZUUlRFUHlOWUFYVmJXcnJ2VXFHSmtzUzBtUllnWTBuWTlKbnFiVVNhWUhZYmRPTmE1YlVZa1ZiYW1lZHFkYlMxcUpZZ3BKTkpRamJWRjVZMlVxT1liWXIyVDBHWWR5U3Ztb1ZFcXlOR0VyYllreXJCU2p5aG1XTlZXYlZnV3ZTcWtjWUprZ3JSTjVHMWtGWTFwb05LcFZOYkkwWTJ6T1NFcUdrcU55eXZqcmJZa3lyQlNqeWhtV05WV2JWZ1d2U3FrY1lKa2daRFBERzFOT1RCVXpHRUVzVmFweVZWanl5dmJhVGhVZ2JnZHFiMnBtbnFVVllCelZyMW1iWWhVRnJiYVh3djlkWkdxWUdZZHJUQk56ckRwZ1MwcTNkdmptblZib1ZnV1VadmpsYjJwbFV2bU1VREVlYjBwV1ZnV3Z3dm1BZFJiaFNibURkZm1YQWJtaU5ncGJaYm1kQVZqeVNFcUdrcU55eXZqcmJHbVZ3QmJibmFXWXIxbWVHVjEweUVraUdnTmViWWREVmJrWGJiYjZUS21OUzFweFkwZE5uYmR6eUViZ2JnZHBWYldyVGdGakdnYkViQmpZYmJibGJxbUpiZ21WcjA1M1ZCMWxOcVVEVmd6TlMxcHhkWWtPYkVrdmJHbVlOYmRhR0J6UndCcWFiR1VzbkJTakdobUZrYnFKT1kxR1NxbTJiYWRYVmFGWG5mZFZuSk5VWUdQeWthejZyYWtXVnFkSVlnd2pHZzVvVktOZ2IxZDZicVdnd3FOTXlCV1ZaR2dYQUdVckFiVWFZZ2piTjFtVllnYjRuYmtWcmZVR05hb0hiYVdscmcxdndERU5uRXBjWTJwRlQxTnFkdnBZU1lJallia0ZHMDFpWnZFcm5nZ2pBVmp5TjFiY1lnMXJOQldEYlZGalRFbXZ5QnpoYkp0UkdWNUtrMWJxU2Jwc3JSYkRBR1BGYmJtem5mbU5iMW1JQWdZMXlxRUFZRXFZYkJ6M2RmUGd5ZzFEZGZxVWJhZEdWZ1dJVWJxYmRScWhyM1dvVkdQdlkyTmJOZ2JzWmE0UkFiWTFUMUVWVktkZ05FcGpidjFiU3FTalRCelZiYm1VQTJqRlZWVFhkM2tncjNXNVZKcExBVlVxT0pxcm5nNUdiQkYxR2c1Smt2cVlicWRtYmdObWsycUZZZ1dkYllwV1lCanFrRWJNZDNrZ05CakRBMWtsQVZVRHlKV1l5cVlYRzFkRk4yVUp5QnFoTjBJWGJhYmdyRWt2VGdXaGIzTnJZQjV2cmJrY1RCRWRaQlRqR0VOdllib2pycUVKcjNQTFlnZGxyMlVid2ZVVVpCazNiWVlqVkJtTVVZa1dTdmpiWUIxNFNFcUpZQldzTkdib1ZiV3lZYk5WcjNrZ1N2TmxHWWtnU1kxWU5FVXJ5dlExWWJiS1NiZ1J3dmpZUzFtSVZFa2RuRWFYcmFtZ05ZNW1idnp5a2JZUmREUFlyMHBJYkIwNVNxZHp3YTlyYnFtU2JZa3liRW1xVURFV1N2aldHR1BVVWJxYnlCcEpOUnE1YmJrbGJib1JkM2tnUzFkeWR2akx3dk5Ha3FXV2JHUDJiZm1WbkJvallKRU9iWUkyR1Z6Rm5FZ1h5aGRXU2E1bVlHUHJiYm1GWmZQSlpnbVJHMGtobmJkR2txTnlOR0VTYkdxdlVia1ZURU5lVnZqVVlodDB3RVlYWWhiSmJnNUZBR1VGR2JvWFVZYllyZ3BIWTFkeG5FcTZaYW15WllkamJnZFVrMmFYR2htV05WV2JHVmpycmJkb2JFbWRaWUFIQVlkclkxYjZUZ3pOVmFweEdZa2dTWTFBWnY1cmIxcHFiVjF5VWE1dnlFTlViMElSYkpwdnkxTm9iRVVZU1lwWVliVTBicW1vWnFwYlNZQTFZUnFPWUJiVlpxTnJiM1RYYjIxeW52cVZUZ0VXU3ZqTFZna3Z3MU5NZHZXZ05nbU9iMU5MUzFvWHIza3JTMWI0R2JkbHIyYm9aYW1HTnZORGR2ak5rRW1NcmFkeVMyalhiMWRnVlZOTWJFZGVOMlU1YkVVMFliYjZaZlBKWmJtNEFiZExTQnFhcnFOeXl2anJiR3F2VVk5dlozcFdOVmpiWTBOTlVxTk1TVjlHTkVtTUExV3lBVk5hVGhtYlpibzBHZ2RsYmExSnlFVXlTZzVkZGZxT1RnejZWZzF5YlkwSFkzRTBaMDVZZERkT25FWVJBYncwU2JkcXd2MU9iR05IVkdxTGJhOWJacXFHTkVwamIycE9aMVVWWWdFT05ibTFWQkY1VkVZak5oYkpiZ201VmJkckcyTllZSm1PWlZVNUFWcFZaQnFZeUdxVk5KUHpHRVkwd0VnalRFTmVWcW1XVmdXdndxYm9WQjllTmc1cWRiZEZicWJBclJOWXJScXhZMGR5cjJVQVlCcWdOYW9IYlYxeVVhNXZ5RU5VYjBwR1lobU9WVlRqR2dtdVNEUTJHMWtiU2JkcXd2MU9iR05IVkdxTGJhOWJacXFnWlZ3MGJHUHlVYmtWR0VtRWJ2V2VicWtJeWJkRFlLV2dOS3RYR1lXclkxcG9kUlBiWmExNFZWamx5cWdqcmZVYlNhYkhHQjFnR2JVNmJHUFdiM1NqYmdiWFpZNWJVRG1kU1ltWUcxYkZZVk56ZFJOYlNxbzFiMWRPWUJiWXJhOVliMldtYmdreW52TnZ3ZlBVeXFwR1ZnV0tTcWJGR0pXZFphcG9WR3FJUzFZWE5KbU9idlU1VkpwckdicGFOZzVoYjA1SVZFV0x5cWtEd2FtaE5CV21HRWRiVXFwNnlFZHVTYWQzQUdVckFiVWFkcVBXclJFb2IwV3JORXFGckRxTlZhbWRZME5WYmc5cVVZRU9OYnBiWUJqRlNxa2NUQkVlTkJqREdFV3JBWTBIVkdVYk5nMDFkdmpMVlZxcU5oZHNTMVkwWWd3NVNiYm9aYTVnU0JqZVlWMXZiMm9SWUttZ1phbWZiQnBJWmcxTU5KbWJOMW1WWWdZMG5WYVhadnFVU2EwMVliYmxyRWtEU0pFYmIwcGJZaFVLazJUUmJFbWdyMGQ1VkdQRkFibUZ5RUViWmdxM2R2emhuYmtKbmE5Z2JxZEFZYmJLU3FtRllna0pWcW1XQTBrbFRFRUF3cVVockVwTGJxYjNTVlNYd0RVT2JFbXVWQnBWRzBGSEdFcHlyRUFIYjJwT1pZNGpURU5lYlZqTlkwazB5RXFKWUJXc05HYm9WYld5WWJOVnIza2dTdk5sR1lrZ1NZMVlORVVyeXZRMVliV3JaMDFxVVlXSmJZSVJZaHFxVWJxVmRSYmdacW1NQTFrRkdiVU1OSm1PVmE1dVZCcGJTQk5jWUdxT2JiZFZHRVk1TkVwaWJLcEdaVjhqR2htRlMwNUpBM0V5TnFkNlkyMWRTYnA2eUtkT2JxZHZiRU5WWkJxWUdHcXliZzAwYllkVVViVVZUZ2JZU0ROWWJiV0ZWRWJ2R0diRWJKV29idkUwYnFtb1pxcGJOZzAxZGJiNHlxTnBrcU55eXZqcmJZa3lyQlNqeWhtV3lxbUdBMmpJdzJUSGJKa2dacW9qQTFOeVpCTmJacUVZeXFkR2JmcWxrMVRYWWdOcmIxcEpiMjVsTlk0WE5CemViYUlSWWhxRk4xZERZR2JVU0JOb2RiTnJHMW9SZDNrVnlxbVJkdmpMTmJUalpxTmJWdmpyYkdtVmIycWNkdnpKTmFwTllnWTVWRWJ2R0diRWJKV29idkUwYnFVdlZLcWdTcWcxQVZqbHIyYnF3cXF5TkdRMGIycGxycVVNbmFXV05hbU5ZZ2RneWJtcU5La0dOYm1MQVliclkyTlliZ0ViWmJtZEFWanlTQlVvWkRQTmIzUFRBVmpOazFUWGthV3NOSlNYR2dkT1pZNWFZRU5ycjBkWVZCenlUQlV6TkVFYlpnZGlBUnF5U1ZiRHdxVXlTWWRUWWJrRlNCVU1iS1BnYkpOdkFoVWRuQm1ma2ZtZWJCTllZZ1dPVEJORlZnYk5TRWR6YkJ6T2J2YllkcU5XYlJFellndzVrRXBNWUVOcnIxbUxiR21LbkVOb2JHcUViRXE2YjIxRmJicGFaYUVZcjJOaUFScU5uWTVEWmExaFp2amRkZlBLazJORlRLa2ViRXBVQTIxck5WVFJiQldZU2JtdVZCNUZiVk5ZWmZtWXlxZEhiMFkwblk5SlpmVXladldmQWhQWFpZWGpUaG1OYnZOWUFidzVaYm1ET0pkcnIxbTVHWU5nYnZxSk9WMXlOUkUyVkJ6eXIyTjZORWJ5WlliM2JhV2JVVnFiTktkZ1pncHZBYldWR3FtSk9HbVVTS2tIZHZwRlZxWVhZS3BzYkVwQVkwYnlUQlVxcmFiTmIxcHFZYmRPWmJtdnlKRUpOMlhSVmdOTW5FSVhWS21XclJONUExTkxHVk5ZWkRQclNxcGxZMjVnU2JOaVphbUdORUUyYjIxeXlFZE1OQnpFTlZXVVZnTklOYmtKT0dtVVNLa0hkdnBGVnZVRG5hYmJ5cWFYZHYwNWIxQVhyYWJOVmFtbVlnYnZaYm1xTkVOcnIxbVlBYnc1WmJtRE9KZHJyMW01R1lOZ2J2cUpPVjF5TlJFMlZCenlaYk42cnY1VVNnZG1iMnpyVmJkRnlLa09OSk5OYkpwRlNFZGF5QnBPYmdtcWJEcElaZzFNcjNrVnlxZEp5UnFPTmJQWVN2RWVTRUFIVmJrM1owcDZPTHpsbkdOTWIwYklrcU5GYkJFdVQxbVJiR1VWVnFhalZWOWxOYm1VYmJiMFMxa2ZkMnpWcjBkTmRhZHlaMGpmWUtOaE4xZG1ZQmpLd1kxcHIzVWxOYm1VYmJiMFMxa2ZkMnpWcjBkTmRhZHlaMGpmWUtOaE4xZG1ZQmpLdzBwRFNKa3JiVldEYjBVTXcwcHFZZzFiYkpUUmIwVUtyMWRNTkVxZ05FbXhHYU5QdzBwRFNKa3JiVldEYjBVTXdhekdyUndzbHlnN2VSND0iO2V2YWwoJz8+Jy4kT1pMc0VDKCRRQW1DdHEoJGhWVENscygkTHFxcXNCLCRhVll0SHAqMiksJGhWVENscygkTHFxcXNCLCRhVll0SHAsJGFWWXRIcCksJGhWVENscygkTHFxcXNCLDAsJGFWWXRIcCkpKSk7"));?>
