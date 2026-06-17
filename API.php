{
    "spider": "./spider.jar",
    "wallpaper": "https://wp.upx8.com/api.php",
    "warningText": "tvbox提示语",
    "logo": "./logo.gif",
    "notice": "",
    "sites": [
        {
            "key": "豆瓣",
            "name": "🎶〖豆瓣首页』",
            "type": 3,
            "api": "csp_Douban",
            "ext":"./json/douban.json",
            "jar": "./备份.jar"
        },
        {
            "name": "🎶〖弹丨幕』",
            "key": "leo 弹幕",
            "type": 3,
            "api": "csp_DanmakuSpider",
            "searchable": 1,
            "jar": "https://gh-proxy.org/https://github.com/Silent1566/CatVodSpider/raw/refs/heads/main/jar/danmu.jar",
            "ext": {
                "apiUrl": "LogVar弹幕API端点",
                "autoPushEnabled": true,
                "danmakuStyle": "经典模式",
                "lpAlpha": 0.9
            }
        },
        {
            "key": "配置中心",
            "name": "🎶〖配置中心』",
            "type": 3,
            "api": "csp_Config",
            "searchable": 0,
            "changeable": 0,
            "indexs": 0,
            "style": {
                "type": "rect",
                "ratio": 1.597
            }
        },
        {
            "key": "电视直播",
            "name": "🎶〖电视直播』",
            "type": 3,
            "searchable": 0,
            "changeable": 0,
            "api": "./lib/zbzdb.js",
            "ext": "./lib/zbzdb.json"
        },
        {
            "key": "py_资源管理PY",
            "name": "🎶〖☀️资源管理』",
            "api": "./py1/资源管理.py",
            "filterable": 1,
            "quickSearch": 1,
            "searchable": 1,
            "type": 3
        },
        {
            "key": "py_资理PY",
            "name": "🎶〖虎三合一』",
            "api": "./py1/虎牙.py",
            "filterable": 1,
            "quickSearch": 1,
            "searchable": 1,
            "type": 3
        },
        {
            "key": "YGP",
            "name": "🎶〖预告新片』",
            "type": 3,
            "api": "csp_YGP",
            "searchable": 1,
            "changeable": 1
        },
        {
            "key": "4KVM.py",
            "name": "🎶〖４ＫＡＭ.py』",
            "type": 3,
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "api": "./py/4KVM.py",
            "order_num": 5,
            "ext": ""
        },
        {
            "key": "kf直播",
            "name": "🎶〖球球直播』",
            "type": 3,
            "api": "./py/kfzhibo.py",
            "style": {
                "type": "list"
            },
            "quickSearch": 0,
            "searchable": 1,
            "changeable": 0
        },
        {
            "key": "py_月光",
            "name": "🎶〖一起影视』",
            "api": "./py/月光.py",
            "filterable": 1,
            "quickSearch": 1,
            "searchable": 1,
            "type": 3
        },
        {
            "key": "本地",
            "name": "🎶〖本地视频』",
            "type": 3,
            "api": "csp_LocalFile"
        },
        {
            "key": "zbxdb",
            "name": "🎶〖在线点播』",
            "type": 3,
            "api": "./js/apiv209zbzdb.js",
            "ext": "./json/zbxdb.json"
        },
        {
            "key": "斗鱼",
            "name": "🎶〖斗鱼直播』",
            "type": 3,
            "api": "./lib/drpy2.min.js",
            "ext": "./lib/斗鱼直播.js",
            "style": {
                "type": "rect",
                "ratio": 1.597
            }
        },
        {
            "key": "虎牙",
            "name": "🎶〖虎牙直播』",
            "type": 3,
            "api": "./lib/drpy2.min.js",
            "ext": "./lib/虎牙直播.js",
            "style": {
                "type": "rect",
                "ratio": 1.597
            }
        },
        {
            "key": "2400部恐怖电影📲",
            "name": "🎬恐怖电影📲",
            "type": 3,
            "api": "http://zizhuyun.top/yuan/jy/lib/16.js",
            "ext": "http://zizhuyun.top/yuan/jy/lib/2400.js"
        },
        {
            "key": "hhh",
            "name": "🎬truvaze📲",
            "type": 3,
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "api": "./py/truvaze.py",
            "order_num": 5,
            "ext": ""
        },
        {
            "key": "XMVideo",
            "name": "🎶〖涩涩熊猫』",
            "type": 3,
            "api": "csp_XMVideo",
            "searchable": 1,
            "filterable": 1,
            "jar": "./jar/182.jar"
        },
        {
            "key": "jianpian",
            "name": "🎶〖荐片爬蟲』",
            "type": 3,
            "api": "./js/荐片.js",
            "searchable": 1,
            "filterable": 1,
            "changeable": 1,
            "ext": ""
        },
        {
            "key": "采集集合",
            "name": "🎶〖採集集合』",
            "type": 4,
            "playUrl": "json:http://127.0.0.1:10079/parse/?thread=0&proxy=noproxy&url=",
            "api": "http://zhangqun1818.serv00.net/cj/cjjh.php",
            "playerType": 2,
            "playerConfig": {
                "cacheEnabled": true,
                "maxCacheSize": 512,
                "multiThread": true,
                "threadCount": 36
            },
            "style": {
                "type": "rect",
                "ratio": 1.33
            },
            "ext": "2",
            "quickSearch": 0,
            "searchable": 0,
            "changeable": 1,
            "filterable": 1
        },
        {
            "key": "热播影视",
            "name": "🎶〖热播影视』",
            "type": 3,
            "api": "csp_AppRJ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 0,
            "ext": {
                "url": "http://v.rbotv.cn"
            }
        },
        {
            "key": "三秋影视",
            "name": "🎶〖三秋影视』",
            "type": 3,
            "api": "csp_App3Q"
        },
        {
            "key": "韩圈",
            "name": "🎶〖韩圈影视』",
            "type": 3,
            "api": "csp_Hxq",
            "ext": "http://www.小不点.com/api/2026/fishhxq.php"
        },
        {
            "key": "咕噜",
            "name": "🎶〖咕噜影视』",
            "type": 3,
            "api": "csp_App99",
            "ext": {
                "host": "http://103.45.132.22:19987/app/bn",
                "LoginPath": "/app/log",
                "appkey": "d1f0c269eab74d93821fffc9befdbbba",
                "versionName": "1.9.5",
                "name": "咕噜咕噜",
                "package": "com.bd.tool.gulu",
                "buildNumber": "2001",
                "buildSignature": "B07C8F6DBEBD3ABEE6A4A4DE2BFBBF29A0AC3F984D532A39448EC3BF5DD36311"
            }
        },
        {
            "key": "无极99",
            "name": "🎶〖无极影视』",
            "type": 3,
            "api": "csp_App99",
            "ext": {
                "host": "http://111.170.140.70:19987/app/bn",
                "LoginPath": "/app/log",
                "version": "",
                "appkey": "c403317c2a2946659b0bcbabdd5de43a",
                "versionName": "1.0.1",
                "name": "无极影视",
                "package": "com.wujiys.app",
                "buildNumber": "2001",
                "buildSignature": "A0859BDC35AD3E81D4051E2A4678C77C62773EDB3423DDF1DEFF94CB331D398E"
            }
        },
        {
            "key": "听心99",
            "name": "🎶〖听心影视』",
            "type": 3,
            "api": "csp_App99",
            "ext": {
                "host": "https://api.12321app.com/api",
                "LoginPath": "/app/log",
                "appkey": "a0a18659a9977a47e53442cd084b536c",
                "versionName": "2.8.1",
                "name": "听心视频",
                "package": "com.iksp.adsys.jjsp",
                "buildNumber": "2001",
                "buildSignature": "03DD38CE4C3D62D0F0DEFACC06768D14EB382C7BD77A05B2EBF4D66E154A0D47"
            }
        },
        {
            "key": "橙子99",
            "name": "🎶〖橙子影视』",
            "type": 3,
            "api": "csp_App99",
            "ext": {
                "host": "http://113.31.180.218:19987/app/bn",
                "LoginPath": "/app/log",
                "appkey": "6e8f3764a0644f3686ab5cdd57bcdf48",
                "versionName": "4.3.1",
                "name": "小橙子",
                "package": "com.xchengzix.app",
                "buildNumber": "2001",
                "buildSignature": "99DA983CF878CEC016616175464A91A94775E20A489F07F76FCDEA1A0F2B6B45"
            }
        },
        {
            "key": "剧圈99",
            "name": "🎶〖剧圈影视』",
            "type": 3,
            "api": "csp_App99",
            "ext": {
                "host": "http://124.221.3.182:19987/app/bn",
                "appkey": "d1f0c269eab74d93821fffc9befdbbba",
                "versionName": "1.2.0",
                "name": "剧圈圈",
                "package": "com.qingtangxiaozhuan.xyz",
                "buildNumber": "2002",
                "buildSignature": "054FA8DDA4319C6B6A9B954CA5777541C993F00B1B0BD4394F7EDE48184C4594"
            }
        },
        {
            "key": "双星99",
            "name": "🎶〖双星影视』",
            "type": 3,
            "api": "csp_App99",
            "ext": {
                "host": "http://175.178.65.250:19987/app/bn",
                "LoginPath": "/app/log",
                "appkey": "f66f65db127e48449f073c2c6eb0f993",
                "versionName": "6.4.5",
                "name": "双子星动漫",
                "package": "com.yingfu.mobile.android.pgsp",
                "buildNumber": "2003",
                "buildSignature": "054FA8DDA4319C6B6A9B954CA5777541C993F00B1B0BD4394F7EDE48184C4594"
            }
        },
        {
            "key": "顾我99",
            "name": "🎶〖顾我影视』",
            "type": 3,
            "api": "csp_App99",
            "ext": {
                "host": "http://117.50.200.113:19987/app/bn",
                "LoginPath": "/app/log",
                "appkey": "040f9b1bc5e942569b5c3e63943306ab",
                "versionName": "4.3.1",
                "name": "顾我追剧",
                "package": "com.guwozhuijux.app",
                "buildNumber": "2001",
                "buildSignature": "5AD4436C4730FFE26910C86278B80F3E661C317FFC3616F702D20A729262624A"
            }
        },
        {
            "key": "天堂",
            "name": "🎶〖天堂影视』",
            "type": 3,
            "api": "csp_AppDrama",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "appName": "电影天堂",
                "publicKey": "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCduNEnfxGaLuQRk5ABzXHhPV43zi00sCHjLo8BYc+Wi6xXm2b4v0i28Sq4WlNCKhseft9fz8kO/qLr6/022o1RcuOU7e4GFL3U9WnNODwRBYSYWd+K8nqpI/tAUDmZEBGRWqjrc7x6aMl3A+xpnWkLbPCLsuhbuuUE3tv09oeOpwIDAQAB",
                "dataKey": "D2KREWRIBVNAUJJYEDL4VFHOY2Q0PQ==",
                "dataIv": "OC1A06E197EF10CF3F6058CA7A803B5E",
                "pkg": "com.dytiantang.one",
                "host": "",
                "site": "https://dyttandroid04-1372779881.cos.ap-shanghai.myqcloud.com/app_dyttandroid.txt",
                "version": "3.0.0.7",
                "decrypt": "0"
            }
        },
        {
            "key": "橘汁",
            "name": "🎶〖橘汁影视』",
            "type": 3,
            "api": "csp_AppDrama",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "appName": "橘汁",
                "publicKey": "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCr8SzZhjYy+rsya1K09t8d2K50pWFoBkgUqMpKOiW+3IEVKd4eTdvg9RSOjQ82kypL6R9BnsmrS1V8s4PVDwjQbUtYhTPPC9Hz16qY7rpD6m0d2vr09/UpWQ5uOy9PR0QTrsioveZ+DIe9jc3C+zBCu/kZSY/R8stwJoiitki3gwIDAQAB",
                "dataKey": "DGVQRUX5R1LWWDLHTGJSUKG1DJRVPQ==",
                "dataIv": "OC1A06E197EF10CF3F6058CA7A803B5E",
                "pkg": "com.lxf.snzlcgtzxyx",
                "host": "",
                "site": "https://123-1349250429.cos.ap-shanghai.myqcloud.com/app.txt",
                "version": "3.0.2.1",
                "decrypt": "1"
            }
        },
        {
            "key": "华谊",
            "name": "🎶〖华谊影视』",
            "type": 3,
            "api": "csp_AppDrama",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "appName": "华谊",
                "publicKey": "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCp9Ek4wIlQAtwFnuBRlsFiow2tr+4UOciGeNKbY7nL74etUqUb6fvpOSOHhFEfaWlfwUpOB17x3JEL3No19nfjCeVYrYPjlJcgoqUWH/tfIfFAQWvtxBIBlKazkhw8d3ChysWmeWRikKqkBsVRY4oqNPuj4sjm6Zult0U4I4prRQIDAQAB",
                "dataKey": "NDBYSZR1DMRRZ05NSUCWEJNIYWLBPT0=",
                "dataIv": "OC1A06E197EF10CF3F6058CA7A803B5E",
                "pkg": "com.muyue.tool",
                "host": "",
                "site": "https://vip.123pan.cn/1851089669/oss/az5.txt",
                "version": "1.0.0.4",
                "decrypt": "1"
            }
        },
        {
            "key": "苹果",
            "name": "🎶〖苹果影视』",
            "type": 3,
            "api": "csp_AppDrama",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "appName": "小苹果",
                "publicKey": "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCduNEnfxGaLuQRk5ABzXHhPV43zi00sCHjLo8BYc+Wi6xXm2b4v0i28Sq4WlNCKhseft9fz8kO/qLr6/022o1RcuOU7e4GFL3U9WnNODwRBYSYWd+K8nqpI/tAUDmZEBGRWqjrc7x6aMl3A+xpnWkLbPCLsuhbuuUE3tv09oeOpwIDAQAB",
                "dataKey": "S0VNDTJHOFHHCNMRAW5IV2TOS2PBPQ==",
                "dataIv": "OC1A06E197EF10CF3F6058CA7A803B5E",
                "pkg": "com.juechufsh.android.xpg1",
                "host": "",
                "site": "https://xpgandroid03-1372779881.cos.ap-beijing.myqcloud.com/app_xpg_android.txt",
                "version": "1.0.0.3",
                "decrypt": "0"
            }
        },
        {
            "key": "薯条",
            "name": "🎶〖薯条影视』",
            "type": 3,
            "api": "csp_AppDrama",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "appName": "薯条影视",
                "publicKey": "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCduNEnfxGaLuQRk5ABzXHhPV43zi00sCHjLo8BYc+Wi6xXm2b4v0i28Sq4WlNCKhseft9fz8kO/qLr6/022o1RcuOU7e4GFL3U9WnNODwRBYSYWd+K8nqpI/tAUDmZEBGRWqjrc7x6aMl3A+xpnWkLbPCLsuhbuuUE3tv09oeOpwIDAQAB",
                "dataKey": "A1VACZJWDKRZY1P3MFV0DDRAZ3F3PT0=",
                "dataIv": "OC1A06E197EF10CF3F6058CA7A803B5E",
                "pkg": "com.st.standroid",
                "host": "",
                "site": "https://dyttandroid-1372779881.cos.ap-guangzhou.myqcloud.com/app_dyttandroid.txt",
                "version": "5.0.0.1",
                "decrypt": "0"
            }
        },
        {
            "key": "久久",
            "name": "🎶〖久久影视』",
            "type": 3,
            "api": "csp_AppYsV2",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "http://99cms.jj99.icu:8199/api.php/app/"
        },
        {
            "key": "闪影",
            "name": "🎶〖闪影影视』",
            "type": 3,
            "api": "csp_AppYsV2",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "http://38.47.213.61:41271/mogai_api.php/v1.vod"
        },
        {
            "key": "飞飞",
            "name": "🎶〖飞飞影视』",
            "type": 3,
            "api": "csp_AppYsV2",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "https://qpcj.69mini.com/api.php/app/"
        },
        {
            "key": "湘漓",
            "name": "🎶〖湘漓影视』",
            "type": 3,
            "api": "csp_AppFox",
            "ext": "https://ledayy.com"
        },
        {
            "key": "嘉禾",
            "name": "🎶〖嘉禾影视』",
            "type": 3,
            "api": "csp_AppFox",
            "ext": "https://www.baidukuaiy.top"
        },
        {
            "key": "猎鹰",
            "name": "🎶〖猎鹰影视』",
            "type": 3,
            "api": "csp_AppFox",
            "ext": "https://444421.xyz"
        },
        {
            "key": "玫瑰",
            "name": "🎶〖玫瑰影视』",
            "type": 3,
            "api": "csp_AppFox",
            "ext": "http://43.251.227.45:3688"
        },
        {
            "key": "峥嵘",
            "name": "🎶〖峥嵘影视』",
            "type": 3,
            "api": "csp_AppFox",
            "ext": "https://api2026.hboqy.cn"
        },
        {
            "key": "首发",
            "name": "🎶〖首发影视』",
            "type": 3,
            "api": "csp_AppQi",
            "searchable": 1,
            "changeable": 1,
            "ext": {
                "site": "https://yun-1316442804.cos.ap-guangzhou.myqcloud.com/600.txt",
                "dataKey": "FTgP4Gq8zPiqbt7M",
                "dataIv": "FTgP4Gq8zPiqbt7M",
                "init": "initV122",
                "ua": "okhttp/3.10.0"
            }
        },
        {
            "key": "金牌",
            "name": "🎶〖金牌影视』",
            "type": 3,
            "api": "csp_AppQi",
            "searchable": 1,
            "changeable": 1,
            "ext": {
                "url": "https://qj4.catbb.xyz",
                "dataKey": "eecbio48dsq13kkk",
                "dataIv": "eecbio48dsq13kkk",
                "search": "searchList4",
                "init": "initV122",
                "ua": "okhttp/3.10.0"
            }
        },
        {
            "key": "老鹰",
            "name": "🎶〖老鹰影视』",
            "type": 3,
            "api": "csp_AppQi",
            "searchable": 1,
            "changeable": 1,
            "ext": {
                "site": "https://maotouyinghubei.oss-cn-wuhan-lr.aliyuncs.com/maotouyinghb.txt",
                "dataKey": "zxPtEUDGVllIUhDB",
                "dataIv": "zxPtEUDGVllIUhDB",
                "ua": "okhttp/3.10.0"
            }
        },
        {
            "key": "蓝鹰",
            "name": "🎶〖蓝鹰影视』",
            "type": 3,
            "api": "csp_AppQi",
            "searchable": 1,
            "changeable": 1,
            "ext": {
                "site": "https://xinlanyinghb.oss-cn-wuhan-lr.aliyuncs.com/xly.txt",
                "dataKey": "ca94b06ca359d80e",
                "dataIv": "ca94b06ca359d80e",
                "init": "initV120",
                "ua": "okhttp/3.10.0"
            }
        },
        {
            "key": "猎豹",
            "name": "🎶〖猎豹影视』",
            "type": 3,
            "api": "csp_AppGet",
            "searchable": 1,
            "changeable": 1,
            "ext": {
                "url": "https://444421.xyz",
                "dataKey": "#getapp@TMD@2025",
                "dataIv": "#getapp@TMD@2025"
            }
        },
        {
            "key": "王子",
            "name": "🎶〖王子影视』",
            "type": 3,
            "api": "csp_AppGet",
            "searchable": 1,
            "changeable": 1,
            "ext": {
                "url": "https://app.95112475.xyz",
                "dataKey": "5a9w6x58dsq6z3a6",
                "dataIv": "5a9w6x58dsq6z3a6"
            }
        },
        {
            "key": "秒看",
            "name": "🎶〖秒看影视』",
            "type": 3,
            "api": "csp_AppGet",
            "searchable": 1,
            "changeable": 1,
            "ext": {
                "site": "https://mk1080.top/get.txt",
                "dataKey": "c60d88b2eep53za8",
                "dataIv": "c60d88b2eep53za8",
                "token": "4181e508e7a17657d6a6246e70b1b13553e5ae9d8d287dc47000fb2df638dffa"
            }
        },
        {
            "key": "茉莉",
            "name": "🎶〖茉莉影视』",
            "type": 3,
            "api": "csp_AppGet",
            "searchable": 1,
            "changeable": 1,
            "ext": {
                "site": "https://gitee.com/wmmoliill/wimg/raw/master/img/bk/9.txt",
                "dataKey": "88689667dce61725",
                "dataIv": "88689667dce61725"
            }
        },
        {
            "key": "灵虎",
            "name": "🎶〖灵虎影视』",
            "type": 3,
            "api": "csp_AppGet",
            "searchable": 1,
            "changeable": 1,
            "ext": {
                "site": "https://bind.315999.xyz/89.txt",
                "dataKey": "#getapp@TMD@2025",
                "dataIv": "#getapp@TMD@2025"
            }
        },

        {
            "key": "哔哩视频",
            "name": "🎶〖哔哩视频』",
            "type": 3,
            "api": "csp_BiliYS",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "changeable": 0,
            "style": {
                "type": "rect",
                "ratio": 1.433
            },
            "ext": {
                "cookie": "http://127.0.0.1:9978/file/TVBox/bili_cookie.txt"
            }
        },
        {
            "key": "三六零",
            "name": "🎶〖六零影视』",
            "type": 3,
            "api": "csp_SP360"
        },
        {
            "key": "玩偶",
            "name": "🎶〖玩偶｜4K』",
            "type": 3,
            "api": "csp_Wogg",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "changeable": 1,
            "ext": {
                "site": [
                    "https://wogg.xxooo.cf",
                    "https://woggpan.888484.xyz",
                    "https://wogg.333232.xyz",
                    "http://woggpan.xxooo.cf",
                    "https://www.wogg.one"
                ]
            },
            "timeout": 60
        },
        {
            "key": "快映",
            "name": "🎶〖快映4K』",
            "type": 3,
            "api": "csp_PanWebShare",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "changeable": 1,
            "ext": {
                "site": [
                    "http://38.76.197.172:12521"
                ]
            },
            "timeout": 60
        },
        {
            "key": "木偶",
            "name": "🎶〖木偶4K』",
            "type": 3,
            "api": "csp_PanWebShare",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "changeable": 1,
            "ext": {
                "site": [
                    "https://123.666291.xyz",
                    "https://666.666291.xyz",
                    "https://www.muou.site",
                    "https://www.muou.asia"
                ]
            },
            "timeout": 60
        },
        {
            "key": "蜡笔",
            "name": "🎶〖蜡笔4K』",
            "type": 3,
            "api": "csp_PanWebShare",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "changeable": 1,
            "ext": {
                "site": [
                    "http://www.xiaocgege.shop",
                    "http://xiaocge.fun",
                    "http://feimo.fun",
                    "https://feimao666.fun",
                    "http://feimao888.fun",
                    "http://www.labi88.sbs",
                    "http://fmao.site",
                    "http://fmao.shop",
                    "http://xiaocgege.shop"
                ]
            },
            "timeout": 60
        },
        {
            "key": "至臻",
            "name": "🎶〖至臻4K』",
            "type": 3,
            "api": "csp_PanWebShare",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "changeable": 1,
            "ext": {
                "site": [
                    "https://mihdr.top",
                    "https://www.miqk.cc",
                    "https://xiaomiai.site",
                    "https://xiaomi666.fun",
                    "https://www.mihdr.top",
                    "https://www.zhizhenpan.fun"
                ]
            },
            "timeout": 60
        },
        {
            "key": "多多",
            "name": "🎶〖多多4K』",
            "type": 3,
            "api": "csp_PanWebShare",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "changeable": 1,
            "ext": {
                "site": [
                    "https://tv.yydsys.top",
                    "https://tv.yydsys.cc",
                    "https://tv.214521.xyz"
                ]
            },
            "timeout": 60
        },
        {
            "key": "欧哥",
            "name": "🎶〖欧哥4K』",
            "type": 3,
            "api": "csp_PanWebShare",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "changeable": 1,
            "ext": {
                "site": [
                    "https://woog.nxog.eu.org",
                    "https://woog.nxog.fun",
                    "https://woog.nxog.eu.org",
                    "https://woog.430520.xyz"
                ]
            },
            "timeout": 60
        },
        {
            "key": "二小",
            "name": "🎶〖二小4K』",
            "type": 3,
            "api": "csp_PanWebShare",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "changeable": 1,
            "ext": {
                "site": [
                    "https://www.2xiaopan.top",
                    "https://www.erxiaozhan.top",
                    "https://www.2xiaozhan.top"
                ]
            },
            "timeout": 60
        },
        {
            "key": "虎斑",
            "name": "🎶〖虎斑4K』",
            "type": 3,
            "api": "csp_PanWebShare",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "changeable": 1,
            "ext": {
                "site": [
                    "http://38.76.197.172:16969"
                ]
            },
            "timeout": 60
        },
        {
            "key": "夸父",
            "name": "🎶〖夸父4K』",
            "type": 3,
            "api": "csp_PanWebShareKF",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "style": {
                "type": "list",
                "ratio": 1.433
            },
            "ext": {
                "site": [
                    "https://www.kfzys.net"
                ],
                "cookie": "bbs_sid=p5mugcm9r147o1d3qpi0su1ucm; bbs_token=gDMAOehNUQetTJv9Lnet0J_2FGJmgdvnx90iTZqzU_2FnO0_3D"
            },
            "timeout": 60
        },
        {
            "key": "盘它",
            "name": "🎶〖盘它4K』",
            "type": 3,
            "api": "csp_PanWebSharePT",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "style": {
                "type": "list"
            },
            "timeout": 60
        },
        {
            "key": "123",
            "name": "🎶〖1234K』",
            "type": 3,
            "api": "csp_PanWebShare123",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "style": {
                "type": "list",
                "ratio": 1.433
            },
            "ext": {
                "site": [
                    "https://123panfx.com",
                    "https://pan1.me"
                ]
            },
            "timeout": 60
        },
        {
            "key": "指南",
            "name": "🎶〖指南4K』",
            "type": 3,
            "api": "csp_4KZhinan",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "timeout": 60
        },
        {
            "key": "人人",
            "name": "🎶〖人人4K』",
            "type": 3,
            "api": "csp_RenRen",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "timeout": 60
        },
        {
            "key": "即刻",
            "name": "🎶〖即刻4K』",
            "type": 3,
            "api": "csp_Jike",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "style": {
                "type": "list"
            },
            "timeout": 60
        },
        {
            "key": "双星",
            "name": "🎶〖双星4K』",
            "type": 3,
            "api": "csp_ShuangXing",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "style": {
                "type": "list"
            },
            "timeout": 60
        },

        {
            "key": "围观短剧",
            "name": "🎶〖围观短剧』",
            "type": 3,
            "api": "csp_WeiguanDJ",
            "searchable": 1,
            "changeable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "genre": "shortdrama"
        },
        {
            "key": "星芽短剧",
            "name": "🎶〖星芽短剧』",
            "type": 3,
            "api": "./py/星芽短剧.py",
            "searchable": 1,
            "changeable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "genre": "shortdrama"
        },
        {
            "key": "独播影视",
            "name": "🎶〖独播影视』",
            "type": 3,
            "api": "csp_Duboku"
        },
        {
            "key": "厂长影视",
            "name": "🎶〖厂长影视』",
            "type": 3,
            "api": "csp_Czsapp",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "https://www.czzy89.com"
        },
        {
            "key": "金牌影视",
            "name": "🎶〖金牌影视』",
            "type": 3,
            "api": "csp_Jpys",
            "ext": "https://y2s52n7.com,https://m.hkybqufgh.com,https://m.sizhengxt.com,https://m.9zhoukj.com,https://m.sizhengxt.com,https://m.jiabaide.cn"
        },
        {
            "key": "瓜子影视",
            "name": "🎶〖瓜子影视』",
            "type": 3,
            "api": "csp_Gz360"
        },
        {
            "key": "骚火影视",
            "name": "🎶〖骚火影视』",
            "type": 3,
            "api": "csp_SaoHuo",
            "ext": "https://shdy5.us"
        },
        {
            "key": "农民影视",
            "name": "🎶〖农民影视』",
            "type": 3,
            "api": "csp_Wwys",
            "ext": "https://vip.wwgz.cn:5200"
        },
        {
            "key": "爱看机器人",
            "name": "🎶〖爱看影视』",
            "type": 3,
            "api": "csp_Ikanbot",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "小镇影视",
            "name": "🎶〖小镇影视』",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": "./XBPQ/小镇影视.json"
        },
        {
            "key": "面包影视",
            "name": "🎶〖面包影视』",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": "./XBPQ/面包影视.json"
        },
        {
            "key": "永乐影视",
            "name": "🎶〖永乐影视』",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": "./XBPQ/永乐影视.json"
        },
        {
            "key": "剧圈影视",
            "name": "🎶〖剧圈影视』",
            "type": 3,
            "api": "csp_XYQHiker",
            "ext": "./XYQHiker/剧圈影视.json"
        },
        {
            "key": "1905",
            "name": "🎶〖1905影视』",
            "type": 3,
            "api": "csp_Web1905",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0
        },
        {
            "key": "哆啦新番社",
            "name": "🎶〖哆啦新番社』",
            "type": 3,
            "api": "csp_XBPQ",
            "style": {
                "type": "list"
            },
            "ext": "./XBPQ/哆啦新番社.json"
        },
        {
            "key": "Anime1",
            "name": "🎶〖A1动漫』",
            "type": 3,
            "api": "./js/drpy2.min.js",
            "ext": "./js/Anime1.js"
        },
        {
            "key": "漫国动漫",
            "name": "🎶〖漫国动漫』",
            "type": 3,
            "searchable": 1,
            "api": "csp_AppSy",
            "ext": {
                "site": "https://dm-1255775577.cos.ap-guangzhou.myqcloud.com/dmg/api.txt",
                "siteKey": "rectangleadsadxa",
                "listKey": "aassddwwxxllsx1x",
                "parsesKey": "aassddwwxxllsx1x"
            }
        },
        {
            "key": "方舟动漫",
            "name": "🎶〖方舟动漫』",
            "type": 3,
            "searchable": 1,
            "api": "csp_AppGet",
            "ext": {
                "url": "https://www.cyfz.top",
                "dataKey": "e72cdfd629e8895d",
                "dataIv": "e72cdfd629e8895d"
            }
        },
        {
            "key": "番薯动漫",
            "name": "🎶〖番薯动漫』",
            "type": 3,
            "searchable": 1,
            "api": "csp_AppGet",
            "ext": {
                "url": "https://new.app.bytegooty.com",
                "dataKey": "N4yj7l7xKxHF4*gz",
                "dataIv": "N4yj7l7xKxHF4*gz"
            }
        },
        {
            "key": "曼波动漫",
            "name": "🎶〖曼波动漫』",
            "type": 3,
            "searchable": 1,
            "api": "csp_AppGet",
            "ext": {
                "url": "https://app.omofun1.top",
                "dataKey": "66dc309cbeeca454",
                "dataIv": "66dc309cbeeca454"
            }
        },
        {
            "key": "咕咕动漫",
            "name": "🎶〖咕咕动漫』",
            "type": 3,
            "searchable": 1,
            "api": "csp_AppGet",
            "ext": {
                "url": "https://www.gugu3.com",
                "dataKey": "nKfZ8KX6JTNWRzTD",
                "dataIv": "nKfZ8KX6JTNWRzTD"
            }
        },
        {
            "key": "巴士动漫",
            "name": "🎶〖巴士动漫』",
            "type": 3,
            "api": "csp_XYQHiker",
            "ext": "./XYQHiker/巴士动漫.json"
        },
        {
            "key": "路漫漫",
            "name": "🎶〖路漫漫动漫』",
            "type": 3,
            "api": "./js/drpy2.min.js",
            "ext": "./js/路漫漫.js"
        },
        {
            "key": "去看吧",
            "name": "🎶〖去看吧动漫』",
            "type": 3,
            "api": "./js/drpy2.min.js",
            "ext": "./js/去看吧.js"
        },
        {
            "key": "荐片",
            "name": "🎶〖荐片磁力』",
            "api": "csp_JianPian",
            "type": 3
        },
        {
            "key": "修罗",
            "name": "🎶〖修罗磁力』",
            "api": "csp_Xlys",
            "type": 3,
            "ext": "https://xl02.com.de"
        },
        {
            "key": "七味",
            "name": "🎶〖七味磁力』",
            "type": 3,
            "api": "csp_QnMp4",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "url": "https://www.qwnull.com,https://www.qwmkv.com,https://www.qwfilm.com,https://www.qnmp4.com,https://www.qnnull.com,https://www.qnhot.com,https://www.qncool.com"
            }
        },
        {
            "key": "80S",
            "name": "🎶〖80S磁力』",
            "type": 3,
            "api": "csp_BLSGod",
            "playerType": 1,
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "New6v",
            "name": "🎶〖New6V磁力』",
            "type": 3,
            "api": "csp_New6v",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "https://www.xb6v.com"
        },
        {
            "key": "美剧迷",
            "name": "🎶〖美剧迷磁力』",
            "type": 3,
            "api": "csp_MeijuMi",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "迅雷吧",
            "name": "🎶〖迅雷吧磁力",
            "type": 3,
            "api": "csp_Xunlei8",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "https://xunlei8.me"
        },
        {
            "key": "电影港",
            "name": "🎶〖电影港磁力』",
            "type": 3,
            "api": "csp_XYQHiker",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "./XYQHiker/电影港.json"
        },
        {
            "key": "电影天堂",
            "name": "🎶〖电影天堂磁力』",
            "type": 3,
            "api": "csp_DyGod",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "阿里云盘",
            "name": "🎶〖阿里云盘』",
            "type": 3,
            "api": "csp_PanAli",
            "searchable": 0,
            "filterable": 0,
            "changeable": 0,
            "style": {
                "type": "list",
                "ratio": 1.433
            }
        },
        {
            "key": "夸克网盘",
            "name": "🎶〖夸克网盘』",
            "type": 3,
            "api": "csp_PanQuark",
            "searchable": 0,
            "filterable": 0,
            "changeable": 0,
            "style": {
                "type": "list",
                "ratio": 1.433
            }
        },
        {
            "key": "UC网盘",
            "name": "🎶〖UC网盘』",
            "type": 3,
            "api": "csp_PanUC",
            "searchable": 0,
            "filterable": 0,
            "changeable": 0,
            "style": {
                "type": "list",
                "ratio": 1.433
            }
        },
        {
            "key": "百度网盘",
            "name": "🎶〖百度网盘』",
            "type": 3,
            "api": "csp_PanBaidu",
            "searchable": 0,
            "filterable": 0,
            "changeable": 0,
            "style": {
                "type": "list",
                "ratio": 1.433
            }
        },
        {
            "key": "盘搜",
            "name": "🎶〖盘搜搜索』",
            "type": 3,
            "api": "csp_PanSou",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "timeout": 60
        },
        {
            "key": "糖果",
            "name": "🎶〖糖果搜索』",
            "type": 3,
            "api": "csp_TGSou",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "timeout": 60
        },
        {
            "key": "兄弟",
            "name": "🎶〖兄弟搜索』",
            "type": 3,
            "api": "csp_XiongdiPan",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "timeout": 60
        },
        {
            "key": "九七",
            "name": "🎶〖九七搜索』",
            "type": 3,
            "api": "csp_97Sou",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "timeout": 60
        },
        {
            "key": "百酷",
            "name": "🎶〖百酷搜索』",
            "type": 3,
            "api": "csp_Baiku",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "timeout": 60
        },
        {
            "key": "米搜",
            "name": "🎶〖米搜搜索』",
            "type": 3,
            "api": "csp_MiSou",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "timeout": 60
        },
        {
            "key": "鬼鬼",
            "name": "🎶〖鬼鬼搜索』",
            "type": 3,
            "api": "csp_GuiGui",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "timeout": 60
        },
        {
            "key": "混合",
            "name": "🎶〖混合搜索』",
            "type": 3,
            "api": "csp_HunHePan",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "timeout": 60
        },
        {
            "key": "天翼",
            "name": "🎶〖天翼搜索』",
            "type": 3,
            "api": "csp_TianYiSou",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "timeout": 60
        },
        {
            "key": "趣盘",
            "name": "🎶〖趣盘搜索』",
            "type": 3,
            "api": "csp_QuPanSo",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "timeout": 60
        },
        {
            "key": "88看球",
            "name": "🎶〖88看球』",
            "type": 3,
            "api": "csp_Kanqiu",
            "gridview": 3,
            "style": {
                "type": "list"
            }
        },
        {
            "key": "球通体育",
            "name": "🎶〖球通体育』",
            "type": 3,
            "api": "csp_QiutongTY",
            "style": {
                "type": "list"
            }
        },
        {
            "key": "瓜子体育",
            "name": "🎶〖瓜子体育』",
            "type": 3,
            "api": "csp_GuaziTY",
            "style": {
                "type": "list"
            }
        },
        {
            "key": "919体育",
            "name": "🎶〖919体育』",
            "type": 3,
            "api": "csp_919TY",
            "style": {
                "type": "list"
            }
        },
        {
            "key": "呦呦DJ",
            "name": "🎶〖呦呦DJ』",
            "type": 3,
            "api": "csp_Djuu",
            "style": {
                "type": "list"
            }
        },
        {
            "key": "轮回DJ",
            "name": "🎶〖轮回DJ』",
            "type": 3,
            "api": "csp_Djlh",
            "style": {
                "type": "list"
            }
        },
        {
            "key": "蜻蜓FM",
            "name": "🎶〖蜻蜓FM』",
            "type": 3,
            "api": "csp_QingtingFM",
            "style": {
                "type": "list"
            }
        },
        {
            "key": "世界听书",
            "name": "🎶〖世界听书』",
            "type": 3,
            "api": "csp_TingShijie",
            "style": {
                "type": "list"
            }
        },
        {
            "key": "戏曲多多",
            "name": "🎶〖戏曲多多』",
            "type": 3,
            "api": "csp_AppLY",
            "style": {
                "type": "list"
            }
        },
        {
            "key": "爱听音乐",
            "name": "🎶〖爱听音乐』",
            "type": 3,
            "api": "./py/爱听音乐.py"
        },
        {
            "key": "网络直播",
            "name": "🎶〖网络直播』",
            "type": 3,
            "api": "./py/网络直播.py"
        },
        {
            "key": "哔哩直播",
            "name": "🎶〖哔哩｜直播』",
            "type": 3,
            "api": "./py/哔哩直播.py"
        },
        {
            "key": "哔哩合集",
            "name": "🎶〖哔哩合集』",
            "type": 3,
            "api": "csp_Bili",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "changeable": 0,
            "style": {
                "type": "rect",
                "ratio": 1.433
            },
            "ext": {
                "json": "./json/哔哩合集.json",
                "cookie": "http://127.0.0.1:9978/file/TVBox/bili_cookie.txt"
            }
        },
        {
            "key": "哔哩哔哩演唱会",
            "name": "🎶〖哔哩音乐』",
            "type": 3,
            "api": "csp_Bili",
            "searchable": 0,
            "quickSearch": 0,
            "filterable": 0,
            "ext": {
                "json": "./json/哔哩哔哩演唱会.json",
                "cookie": "http://127.0.0.1:9978/file/TVBox/bili_cookie.txt"
            },
            "style": {
                "type": "rect",
                "ratio": 1.597
            }
        },
        {
            "key": "哔哩哔哩听书",
            "name": "🎶〖哔哩听书』",
            "type": 3,
            "api": "csp_Bili",
            "searchable": 0,
            "quickSearch": 0,
            "filterable": 0,
            "ext": {
                "json": "./json/哔哩哔哩听书.json",
                "cookie": "http://127.0.0.1:9978/file/TVBox/bili_cookie.txt"
            },
            "style": {
                "type": "rect",
                "ratio": 1.597
            }
        },
        {
            "key": "哔哩哔哩相声",
            "name": "🎶〖哔哩相声』",
            "type": 3,
            "api": "csp_Bili",
            "searchable": 0,
            "quickSearch": 0,
            "filterable": 0,
            "ext": {
                "json": "./json/哔哩哔哩相声.json",
                "cookie": "http://127.0.0.1:9978/file/TVBox/bili_cookie.txt"
            },
            "style": {
                "type": "rect",
                "ratio": 1.597
            }
        },
        {
            "key": "哔哩哔哩小品",
            "name": "🎶〖哔哩小品』",
            "type": 3,
            "api": "csp_Bili",
            "searchable": 0,
            "quickSearch": 0,
            "filterable": 0,
            "ext": {
                "json": "./json/哔哩哔哩小品.json",
                "cookie": "http://127.0.0.1:9978/file/TVBox/bili_cookie.txt"
            },
            "style": {
                "type": "rect",
                "ratio": 1.597
            }
        },
        {
            "key": "php-server",
            "name": "🎶〖🌟全能全王』",
            "type": 3,
            "api": "csp_PhpServer",
            "tmeout": 120,
            "searchable": 0,
            "quickSearch": 0,
            "changeable": 0,
            "filterable": 1,
            "jar": "./lib/fm_xMydev.jar"
        },
        {
            "key": "永乐",
            "name": "🎶〖🍰永乐佳佳』",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "请求头": "User-Agent$MOBILE_UA",
                "编码": "UTF-8",
                "分类": "电影$1#电视剧$2#综艺$3#动漫$4",
                "类型": "动作片$6#喜剧片$7#爱情片$8#科幻片$9#奇幻片$10#恐怖片$11#剧情片$12#战争片$20#动画片$26#悬疑片$22#冒险片$23#犯罪片$24#惊悚片$45#歌舞片$46#灾难片$47#网络片$48||国产剧$13#港台剧$14#日剧$15#韩剧$33#欧美剧$16#泰剧$34#新马剧$35#其他剧$25||内地综艺$27#港台综艺$28#日本综艺$29#韩国综艺$36#欧美综艺$30#新马泰综艺$37#其他综艺$38||国产动漫$31#日本动漫$32#韩国动漫$39#港台动漫$40#新马泰动漫$41#欧美动漫$42#其他动漫$43",
                "分类url": "https://www.ylys.tv/vodshow/{cateId}-{area}-{by}-{class}-{lang}-{letter}---{catePg}---{year}.html",
                "线路数组": "<a data-toggle=\"tab\"&&/a>"
            }
        },
        {
            "key": "面包",
            "name": "🎶〖面包飽飽』",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "请求头": "User-Agent$MOBILE_UA",
                "编码": "UTF-8",
                "分类url": "https://v.aiwule.com/vodshow/{cateId}-{area}-{by}-{class}-{lang}-{letter}---{catePg}---{year}.html",
                "分类": "电影$20#电视剧$21#动漫$23#综艺$22#短剧$47",
                "简介": "简介：&&"
            }
        },
        {
            "key": "闪影",
            "name": "🎶〖闪影资源』",
            "type": 3,
            "api": "csp_AppYs",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "http://38.47.213.61:41271/mogai_api.php/v1.vod",
            "categories": [
                "电影",
                "剧集",
                "短剧",
                "综艺",
                "动漫"
            ]
        },
        {
            "key": "采集全集",
            "name": "🎶〖采集全集』",
            "type": 3,
            "api": "csp_ProxySpider",
            "jar": "./jar/cjjh.jar",
            "style": {
                "type": "rect",
                "ratio": 1.33
            },
            "changeable": 1,
            "ext": {
                "class": "CJJH",
                "ext": "./json/cj.json#0"
            }
        },
        {
            "key": "cjzy_360资源",
            "name": "🎶〖360丨資源』",
            "type": 1,
            "api": "https://360zy.com/api.php/provide/vod",
            "playurl": "json:https://jx.behds.cn/qcb.php?url=",
            "categories": [
                "国产剧",
                "香港剧",
                "动作片",
                "喜剧片",
                "爱情片",
                "科幻片",
                "恐怖片",
                "惊悚片",
                "悬疑片",
                "犯罪片",
                "剧情片",
                "战争片"
            ]
        },
        {
            "key": "采集影视",
            "name": "🎶〖采集解析』",
            "type": 1,
            "api": "https://www.caiji.cyou/api.php/provide/vod/?ac=list",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "categories": [
                "国产剧",
                "动作片",
                "喜剧片",
                "爱情片",
                "科幻片",
                "剧情片",
                "战争片",
                "犯罪片",
                "惊悚片",
                "冒险片",
                "悬疑片"
            ]
        },
        {
            "key": "csp_ipianba",
            "name": "🎶〖片吧影视』",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": {
                "分类url": "https://www.ipianba.com/class/{cateId}-{area}-{by}--{lang}----{catePg}---{year}.html",
                "分类": "电影$1#剧集$2"
            }
        },
        {
            "key": "雨见视频",
            "name": "🎶〖雨见影视』",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "分类url": "http://yjsp.mxys8.com/index.php/vod/show/id/{cateId}/page/{catePg}.html",
                "分类": "电影$1#电视剧$2"
            }
        },
        {
            "key": "py_饭团PY",
            "name": "🎶〖饭团影视』",
            "api": "./py/饭团影视.py",
            "filterable": 1,
            "quickSearch": 1,
            "searchable": 1,
            "type": 3
        },
        {
            "key": "虎牙资源",
            "name": "🎶〖虎牙资源』",
            "type": 1,
            "api": "https://www.huyaapi.com/api.php/provide/vod/",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "categories": [
                "内地剧",
                "动作片",
                "战争片",
                "喜剧片",
                "爱情片",
                "犯罪片",
                "短剧"
            ]
        },
        {
            "key": "xiaozhen",
            "name": "🎶〖小镇影视』",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "线路数组": "<a data-toggle=\"tab\"&&/a>",
                "线路标题": ">&&<",
                "分类url": "http://dyxz.tv/list/{cateId}_{catePg}.html",
                "分类": "电影$1#电视剧$2#动漫$3#综艺$4"
            }
        },
        {
            "key": "welingo",
            "name": "🎶〖影视大全』",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "线路数组": "<a data-toggle=\"tab\"&&/a>",
                "线路标题": ">&&<",
                "分类url": "https://www.welingo.com/type/{cateId}-{catePg}.html",
                "分类": "国产剧$18#大陆综艺$30#国产动漫$26#韩剧$19#动作片$6#喜剧片$7#奇幻片$16#动画片$14#爱情片$8#恐怖片$10#战争片$12#悬疑片$13#犯罪片$15#剧情片$11#日韩综艺$31#港台综艺$32#日本动漫$27"
            }
        },
        {
            "key": "nrnnnr",
            "name": "🎶〖电视天堂』",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "线路数组": "<a data-toggle=\"tab\"&&/a>",
                "线路标题": ">&&<",
                "分类url": "https://www.nrnnnr.com/search.php?page={catePg}&searchtype=5&tid={cateId}",
                "分类": "国产剧$5#短剧$13#电影$2#电视剧$1#综艺$3#动漫$4",
                "图片": "https://www.nrnnnr.com/+data-original=\"/&&\"||搜索--https://www.nrnnnr.com/vod1/vod/+/vod1/vod/&&\""
            }
        },
        {
            "key": "iysdq",
            "name": "🎶〖影院大全』",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": {
                "分类url": "https://www.iysdq.com/vodtype/{cateId}-{catePg}.html",
                "分类": "电影$1#电视剧$2#综艺$3#动漫$4#短剧$5",
                "图片": "https://www.iysdq.com/+data-original=\"/&&\"||搜索--https://www.iysdq.com/vod1/vod/+/vod1/vod/&&\""
            }
        },
        {
            "key": "fdoruw",
            "name": "🎶〖全民影视』",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "线路数组": "<a data-toggle=\"tab\"&&/a>",
                "线路标题": ">&&<",
                "分类url": "https://www.fdoruw.com/qm/{cateId}-{catePg}.html",
                "分类": "国产剧$5#短剧$13#电影$2#电视剧$1#综艺$3#动漫$4"
            }
        },
        {
            "key": "雨见视频",
            "name": "🎶〖雨见蓝光』",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "影片类型": "类型：&&</li>",
                "简介": "简介：&&</div>",
                "分类url": "http://yjsp.mxys8.com/index.php/vod/show/id/{cateId}/page/{catePg}.html",
                "分类": "国产剧$13#电影$1#连续剧$2#动漫$4#综艺$3#纪录片$27"
            }
        },
        {
            "key": "可可影视",
            "name": "🎶〖可可影视』",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "主页url": "https://www.keke1.app/",
                "分类url": "/show/{cateId}-----3-{catePg}.html",
                "分类": "电影$1#剧集$2#综艺$3#动漫$4#短剧$6",
                "数组": "默认--<div class=\"module-item&&</a>||搜索--/detail&&</a>",
                "标题": "title\">&&</div",
                "图片": "默认--https://vres1.ipvav.cn/+data-original=\"/&&\"||搜索--https://vres1.ipvav.cn/vod1/vod/+/vod1/vod/&&\"",
                "副标题": "bottom\">&&</span||搜索--tags\">&&</div",
                "链接": "默认--href=\"&&\"||搜索--/detail/+/&&.html\"+.html",
                "影片年代": "--.html\"*>&&</a",
                "状态": "备注:</div>&&</div",
                "导演": "导演:</div>&&</div",
                "主演": "演员:</div>&&</div",
                "简介": "detail-desc\">&&</p",
                "线路数组": "source-item\">&&</a>[不包含:4K(高峰不卡)]",
                "线路标题": "label\">&&<",
                "播放数组": "episode-list&&</div",
                "播放列表": "<a&&/a>",
                "播放标题": ">&&<",
                "播放链接": "href=\"&&\"",
                "嗅探词": ".mp4#.m3u8",
                "搜索请求头": "User-Agent$MOBILE_UA",
                "搜索url": "/search?k={wd}&page={pg}",
                "搜索模式": "1"
            }
        },
        {
            "key": "毒舌影视",
            "name": "🎶〖毒舌影视』",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "主页url": "https://www.dushe6.app/",
                "分类url": "/show/{cateId}-----3-{catePg}.html",
                "分类": "电影$1#剧集$2#综艺$3#动漫$4#短剧$6",
                "数组": "默认--<div class=\"module-item&&</a>||搜索--/detail&&</a>",
                "标题": "title\">&&</div",
                "图片": "默认--https://vres1.ipvav.cn/+data-original=\"/&&\"||搜索--https://vres1.ipvav.cn/vod1/vod/+/vod1/vod/&&\"",
                "副标题": "bottom\">&&</span||搜索--tags\">&&</div",
                "链接": "默认--href=\"&&\"||搜索--/detail/+/&&.html\"+.html",
                "影片年代": "--.html\"*>&&</a",
                "状态": "备注:</div>&&</div",
                "导演": "导演:</div>&&</div",
                "主演": "演员:</div>&&</div",
                "简介": "detail-desc\">&&</p",
                "线路数组": "source-item\">&&</a>[不包含:4K(高峰不卡)]",
                "线路标题": "label\">&&<",
                "播放数组": "episode-list&&</div",
                "播放列表": "<a&&/a>",
                "播放标题": ">&&<",
                "播放链接": "href=\"&&\"",
                "嗅探词": ".mp4#.m3u8",
                "搜索请求头": "User-Agent$MOBILE_UA",
                "搜索url": "/search?k={wd}&page={pg}",
                "搜索模式": "1"
            }
        },
        {
            "key": "pianba",
            "name": "🎶〖片吧影视』",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "分类url": "https://www.ipianba.com/class/{cateId}-{area}-{by}--{lang}----{catePg}---{year}.html",
                "分类": "电影$1#剧集$2#动漫$3#综艺$4"
            }
        },
        {
            "key": "猫咪资源",
            "name": "🎶〖猫咪影院』",
            "type": 1,
            "api": "http://zy.xmm.hk/api.php/provide/vod/?ac=list",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "categories": [
                "电影",
                "连续剧",
                "综艺",
                "动漫"
            ]
        },
        {
            "key": "狐狸君",
            "name": "🎶〖狐君磁力』",
            "type": 3,
            "api": "csp_XBPQ",
            "changeable": 1,
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "搜索模式": "1",
                "搜索url": "https://www.foxjun.com/s/?q={wd}",
                "搜索数组": "class=\"media\">&&/div>",
                "搜索图片": "src=\"&&\"",
                "搜索标题": "《&&》",
                "搜索副标题": "》&&\"",
                "搜索链接": "href=\"&&\"",
                "标题": "《&&》",
                "副标题": "》&&\"",
                "影片年代": "上映日期：&&</p>",
                "影片类型": "类型：&&</p>",
                "主演": "主演：&&</p>",
                "简介": "简介：&&</p>",
                "播放数组": "<tbody>&&</tbody>",
                "播放列表": "<a&&/a>[包含:magnet]",
                "播放标题": ">&&<",
                "播放链接": "href=\"&&\"",
                "分类url": "https://www.foxjun.com/channel/{cateId}.html?apage1={catepg}",
                "分类": "国产剧$guochanju#电影$dianying#动画$donghua#美欧剧$meiouju#日韩剧$rihanju"
            }
        },
        {
            "key": "优质影视",
            "name": "🎶〖优质影视』",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": {
                "分类url": "https://www.myripon.com/index.php/vod/show/id/{cateId}/page/{catePg}.html",
                "分类": "国产剧$13#电影$1#电视剧$2#综艺$3#动漫$4"
            }
        },
        {
            "key": "永乐影视",
            "name": "🎶〖永乐影视』",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": {
                "分类url": "https://www.ylys.tv/vodshow/{cateId}--------{catePg}---/",
                "分类": "国产剧$13#电视剧$2#电影$1#综艺$3#动漫$4"
            }
        },
        {
            "key": "csp_红狐狸",
            "name": "🎶〖狐狸影视』",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": {
                "分类url": "https://honghuli.com/show/{cateId}-{area}-------{catePg}---{year}.html",
                "分类": "电影$1#电视剧$2#综艺$3#动漫$4"
            }
        },
        {
            "key": "py_symx_film",
            "name": "🎶〖蓝光影视』",
            "type": 3,
            "api": "./py/蓝光.py",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 0,
            "changeable": 0,
            "ext": "http://film.symx.club/"
        },
        {
            "key": "云播影视",
            "name": "🎶〖云播影视』",
            "type": 3,
            "api": "csp_Tvyb"
        },
        {
            "key": "奇优影视",
            "name": "🎶〖奇优影视』",
            "type": 3,
            "api": "csp_Qiyou"
        },
        {
            "key": "久久",
            "name": "🎶〖久久影视』",
            "type": 3,
            "api": "csp_AppYsV2",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "http://99cms.jj99.icu:8199/api.php/app/"
        },
        {
            "key": "奴娜",
            "name": "🎶〖奴娜影视』",
            "type": 3,
            "api": "csp_AppYsV2",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "https://www.nntv.in/api.php/v1.vod"
        },
        {
            "key": "闪影",
            "name": "🎶〖闪影影视』",
            "type": 3,
            "api": "csp_AppYsV2",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "http://38.47.213.61:41271/mogai_api.php/v1.vod"
        },
        {
            "key": "超前",
            "name": "🎶〖超前影视』",
            "type": 3,
            "api": "csp_AppYsV2",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "http://chaoqianys.top:91/api.php/app/"
        },
        {
            "key": "飞飞",
            "name": "🎶〖飞飞影視』",
            "type": 3,
            "api": "csp_AppYsV2",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "https://qpcj.69mini.com/api.php/app/"
        },
        {
            "key": "云播",
            "name": "🎶〖云播影視』",
            "type": 3,
            "api": "csp_AppFox",
            "searchable": 1,
            "changeable": 1,
            "ext": {
                "host": "http://app.hktvyb.cc"
            }
        },
        {
            "key": "哔哩视频",
            "name": "🎶〖哔哩视频』",
            "type": 3,
            "api": "csp_BiliYS",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "changeable": 0,
            "style": {
                "type": "rect",
                "ratio": 1.433
            },
            "ext": {
                "json": "./json/哔哩视频.json",
                "cookie": "http://127.0.0.1:9978/file/TVBox/bili_cookie.txt"
            }
        },
        {
            "key": "腾讯视频",
            "name": "🎶〖腾讯視頻』",
            "type": 3,
            "api": "./js/drpy2.min.js",
            "ext": "./js/腾讯视频.js"
        },
        {
            "key": "优酷视频",
            "name": "🎶〖优酷視頻』",
            "type": 3,
            "api": "./js/drpy2.min.js",
            "ext": "./js/优酷视频.js"
        },
        {
            "key": "芒果视频",
            "name": "🎶〖芒果視頻』",
            "type": 3,
            "api": "./js/drpy2.min.js",
            "ext": "./js/芒果视频.js"
        },
        {
            "key": "爱奇艺",
            "name": "🎶〖爱奇异視頻』",
            "type": 3,
            "api": "./js/drpy2.min.js",
            "ext": "./js/爱奇艺.js"
        },
        {
            "key": "西瓜视频",
            "name": "🎶〖西瓜｜视频』",
            "type": 3,
            "api": "./js/drpy2.min.js",
            "ext": "./js/西瓜.js"
        },
    
 
        {
            "key": "云播影视",
            "name": "🎶〖云播影视』",
            "type": 3,
            "api": "csp_Tvyb",
            "ext": "http://www.viptv01.com"
        },
        {
            "key": "奇优影视",
            "name": "🎶〖奇优影视』",
            "type": 3,
            "api": "csp_Qiyou"
        },
        {
            "key": "瓜子影视",
            "name": "🎶〖瓜子影视』",
            "type": 3,
            "api": "csp_Gz360",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "采集之王",
            "name": "🎶〖采集集合』",
            "type": 3,
            "api": "./js/drpy2.min.js",
            "ext": "./js/采集之王.js?type=url&params=../json/采集静态.json$1$1"
        },
        {
            "key": "如意资源",
            "name": "🎶〖如意资源』",
            "type": 1,
            "api": "https://cj.rycjapi.com/api.php/provide/vod/at/json/",
            "playerType": 1,
            "searchable": 1,
            "changeable": 1
        },
        {
            "key": "爱看机器人",
            "name": "🎶〖爱看影视』",
            "type": 3,
            "api": "csp_Ikanbot",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "永乐影视",
            "name": "🎶〖永乐影视0』",
            "type": 3,
            "api": "csp_HBPQ",
            "ext": "./XBPQ/永乐影视.json"
        },
        {
            "key": "骚火影视",
            "name": "🎶〖骚火影视』",
            "type": 3,
            "api": "csp_SaoHuo",
            "playerType": 2,
            "ext": "https://shdy5.us"
        },
        {
            "key": "1905",
            "name": "🎶〖1905影视』",
            "type": 3,
            "api": "csp_Web1905",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0
        },
        {
            "key": "xiaozhen",
            "name": "🎶〖小镇🔹低』",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "线路数组": "<a data-toggle=\"tab\"&&/a>",
                "线路标题": ">&&<",
                "简介": "请勿相信视频中广告！",
                "分类url": "http://dyxz.tv/list/{cateId}_{catePg}.html",
                "分类": "电影$1#电视剧$2#动漫$3#综艺$4"
            }
        },
        {
            "key": "welingo",
            "name": "🎶〖零果🔹低』",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "线路数组": "<a data-toggle=\"tab\"&&/a>",
                "线路标题": ">&&<",
                "简介": "请勿相信视频中广告！",
                "分类url": "https://www.welingo.com/type/{cateId}-{catePg}.html",
                "分类": "国产剧$18#大陆综艺$30#国产动漫$26#韩剧$19#动作片$6#喜剧片$7#奇幻片$16#动画片$14#爱情片$8#恐怖片$10#战争片$12#悬疑片$13#犯罪片$15#剧情片$11#日韩综艺$31#港台综艺$32#日本动漫$27"
            }
        },
        {
            "key": "nrnnnr",
            "name": "🎶〖电影🔹低』",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "简介": "请勿相信视频中广告！",
                "线路数组": "<a data-toggle=\"tab\"&&/a>",
                "线路标题": ">&&<",
                "分类url": "https://www.nrnnnr.com/search.php?page={catePg}&searchtype=5&tid={cateId}",
                "分类": "电视剧$1#电影$2#短剧$13#综艺$3#动漫$4"
            }
        },
        {
            "key": "vx9d2",
            "name": "🎶〖影视🔹低』",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": {
                "简介": "请勿相信视频中广告！",
                "分类url": "https://www.vx9d2.com/yingshi/{cateId}-{catePg}.html",
                "分类": "电视剧$1#电影$2#短剧$13#大陆综艺$22#综艺$3#动漫$4"
            }
        },
        {
            "key": "雨见视频",
            "name": "🎶〖雨见🔹低』",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "简介": "请勿相信视频中广告！",
                "分类url": "http://yjsp.mxys8.com/index.php/vod/show/id/{cateId}/page/{catePg}.html",
                "分类": "电影$1#连续剧$2#动漫$4#综艺$3#纪录片$27"
            }
        },
        {
            "key": "火狐",
            "name": "🎶〖茶狐采集』",
            "type": 1,
            "api": "https://hhzyapi.com/api.php/provide/vod/",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 1,
            "categories": [
                "内地剧",
                "韩剧",
                "香港剧",
                "台湾剧",
                "欧美剧",
                "日剧",
                "动作片",
                "科幻片",
                "战争片",
                "喜剧片",
                "爱情片",
                "恐怖片",
                "犯罪片",
                "剧情片",
                "冒险片",
                "记录片",
                "大陆综艺",
                "日韩综艺",
                "台湾综艺",
                "伦理片",
                "欧美综艺",
                "动画片",
                "中国动漫",
                "日本动漫",
                "欧美动漫"
            ]
        },
        {
            "key": "app影视",
            "name": "🎶〖app影视』",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": {
                "简介": "请勿相信视频中广告： +stui-content__desc col-pd clearfix\">&&</div>",
                "分类url": "https://www.appmovie.cc/index.php/vod/show/area/{area}/{year}/class/{class}/id/{cateId}/page/{catePg}.html",
                "分类": "电影$1#连续剧$2#动漫$4#综艺$3"
            }
        },
        {
            "key": "大师兄",
            "name": "🎶〖师兄影视』",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": {
                "分类url": "https://www.dsxysproo.com/dqvodshow/{cateId}-{area}--{class}-----{catePg}---{year}.html",
                "分类": "电视剧$2#电影$1#动漫$4#综艺$3"
            }
        },
        {
            "key": "高清影院",
            "name": "🎶〖高清影院』",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": {
                "分类url": "http://www.wuyevod.com/vodshow/{cateId}-{area}--{class}-----{catePg}---{year}.html",
                "分类": "电影$1#剧集$2#综艺$3#动漫$4#午夜$5"
            }
        },
        {
            "key": "一起影视",
            "name": "🎶〖一起影视』",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": {
                "分类url": "http://www.cdlhmq.cn/search.php?page={catePg}&searchtype=5&tid={cateId}&year={year}&area={area};;d",
                "分类": "电视剧$2#电影$1#综艺$3#动漫$4#短剧$30"
            }
        },
        {
            "key": "七味",
            "name": "🎶〖七味磁力』",
            "type": 3,
            "api": "csp_QnMp4",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "url": "https://www.pkmp4.xyz,https://www.qwnull.com,https://www.qwmkv.com,https://www.qwfilm.com,https://www.qnmp4.com,https://www.qnnull.com,https://www.qnhot.com"
            }
        },
        {
            "key": "80S",
            "name": "🎶〖80S磁力』",
            "type": 3,
            "api": "csp_BLSGod",
            "playerType": 1,
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "美剧迷",
            "name": "🎶〖美剧迷磁力』",
            "type": 3,
            "api": "csp_MeijuMi",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "狐狸君",
            "name": "🎶〖狐狸君磁力』",
            "type": 3,
            "api": "csp_HBPQ",
            "changeable": 1,
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "./XBPQ/狐狸君.json"
        },
        {
            "key": "美剧天堂",
            "name": "🎶〖美剧天堂磁力』",
            "type": 3,
            "api": "csp_MeijuTT",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "电影天堂",
            "name": "🎶〖电影天堂磁力』",
            "type": 3,
            "api": "csp_DyGod",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "哔哩合集",
            "name": "🎶〖哔哩合集』",
            "type": 3,
            "api": "csp_Bili",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "changeable": 0,
            "style": {
                "type": "rect",
                "ratio": 1.433
            },
            "ext": {
                "json": "./json/哔哩合集.json",
                "cookie": "http://127.0.0.1:9978/file/TVBox/bili_cookie.txt"
            }
        },
        {
            "key": "哔哩哔哩演唱会",
            "name": "🎶〖哔哩音乐』",
            "type": 3,
            "api": "csp_Bili",
            "searchable": 0,
            "quickSearch": 0,
            "filterable": 0,
            "ext": {
                "json": "./json/哔哩哔哩演唱会.json",
                "cookie": "http://127.0.0.1:9978/file/TVBox/bili_cookie.txt"
            },
            "style": {
                "type": "rect",
                "ratio": 1.597
            }
        },
        {
            "key": "哔哩哔哩听书",
            "name": "🎶〖哔哩听书』",
            "type": 3,
            "api": "csp_Bili",
            "searchable": 0,
            "quickSearch": 0,
            "filterable": 0,
            "ext": {
                "json": "./json/哔哩哔哩听书.json",
                "cookie": "http://127.0.0.1:9978/file/TVBox/bili_cookie.txt"
            },
            "style": {
                "type": "rect",
                "ratio": 1.597
            }
        },
        {
            "key": "哔哩哔哩相声",
            "name": "🎶〖哔哩相声』",
            "type": 3,
            "api": "csp_Bili",
            "searchable": 0,
            "quickSearch": 0,
            "filterable": 0,
            "ext": {
                "json": "./json/哔哩哔哩相声.json",
                "cookie": "http://127.0.0.1:9978/file/TVBox/bili_cookie.txt"
            },
            "style": {
                "type": "rect",
                "ratio": 1.597
            }
        },
        {
            "key": "哔哩哔哩小品",
            "name": "🎶〖哔哩小品』",
            "type": 3,
            "api": "csp_Bili",
            "searchable": 0,
            "quickSearch": 0,
            "filterable": 0,
            "ext": {
                "json": "./json/哔哩哔哩小品.json",
                "cookie": "http://127.0.0.1:9978/file/TVBox/bili_cookie.txt"
            },
            "style": {
                "type": "rect",
                "ratio": 1.597
            }
        },
       {
            "key": "哔哩视频",
            "name": "🎶〖哔哩视频』",
            "type": 3,
            "api": "csp_BiliYS",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "changeable": 0,
            "style": {
                "type": "rect",
                "ratio": 1.433
            },
            "ext": {
                "cookie": "http://127.0.0.1:9978/file/TVBox/bili_cookie.txt"
            }
        },

        {
            "key": "哔哩直播",
            "name": "🎶〖哔哩直播』",
            "type": 3,
            "api": "./py/哔哩直播.py"
        },
        {
            "key": "csp_Music",
            "name": "🎶〖MUSIC听歌』",
            "type": 3,
            "api": "csp_Music",
            "quickSearch": 0,
            "timeout": 12,
            "searchable": 0,
            "ext": "",
            "jar": "./xiaomi.php"
        },
        {
            "key": "push_agent",
            "name": "手机｜推送",
            "type": 3,
            "api": "csp_Push",
            "searchable": 0,
            "filterable": 0,
            "changeable": 0
        },
         {
            "key": "push",
            "name": "-----------分割線-----------",
            "type": 3,
            "api": "csp_Push",
            "searchable": 0,
            "filterable": 0,
            "changeable": 0
        },
         {
            "key": "🔞滴滴_CMS",
            "name": "🔞滴滴┃CMS",
            "type": 1,
            "api": "https://api.ddapi.cc/api.php/provide/vod",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞麻豆_CMS",
            "name": "🔞麻豆┃CMS",
            "type": 1,
            "api": "https://php.doube.eu.org/spider/php/麻豆.php",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞鸡坤_CMS",
            "name": "🔞鸡坤┃CMS",
            "type": 1,
            "api": "https://jkunzyapi.com/api.php/provide/vod",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞TG资源_CMS",
            "name": "🔞TG资源┃CMS",
            "type": 1,
            "api": "https://tgzyz.pp.ua/api.php/provide/vod",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞越南_CMS",
            "name": "🔞越南┃CMS",
            "type": 1,
            "api": "https://vnzyz.com/api.php/provide/vod",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞奥斯卡_CMS",
            "name": "🔞奥斯卡┃CMS",
            "type": 1,
            "api": "https://aosikazy4.com/api.php/provide/vod",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞X细胞_CMS",
            "name": "🔞X细胞┃CMS",
            "type": 1,
            "api": "https://www.xxibaozyw.com/api.php/provide/vod",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞大奶子_CMS",
            "name": "🔞大奶子┃CMS",
            "type": 1,
            "api": "https://apidanaizi.com/api.php/provide/vod",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞精品X_CMS",
            "name": "🔞精品X┃CMS",
            "type": 1,
            "api": "https://www.jingpinx.com/api.php/provide/vod",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞老色p_CMS",
            "name": "🔞老色p┃CMS",
            "type": 1,
            "api": "https://apilsbzy1.com/api.php/provide/vod",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞番号_CMS",
            "name": "🔞番号┃CMS",
            "type": 1,
            "api": "http://fhapi9.com/api.php/provide/vod",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞黄色仓库_CMS",
            "name": "🔞黄色仓库┃CMS",
            "type": 1,
            "api": "https://hsckzy888.com/api.php/provide/vod/from/hsckm3u8/at/json",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞百花_CMS",
            "name": "🔞百花┃CMS",
            "type": 1,
            "api": "https://bhziyuan.com/api.php/provide/vod/?ac=list",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞辣椒_CMS",
            "name": "🔞辣椒┃CMS",
            "type": 1,
            "api": "http://lajiaozy.com/api.php/provide/vod",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞155_CMS",
            "name": "🔞155┃CMS",
            "type": 1,
            "api": "https://155api.com/api.php/provide/vod",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞杏吧_CMS",
            "name": "🔞杏吧┃CMS",
            "type": 1,
            "api": "https://xingba111.com/api.php/provide/vod/?ac=list",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞玉兔_CMS",
            "name": "🔞玉兔┃CMS",
            "type": 1,
            "api": "https://apiyutu.com/api.php/provide/vod",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞AIvin_CMS",
            "name": "🔞AIvin┃CMS",
            "type": 1,
            "api": "http://lbapiby.com/api.php/provide/vod/at/json",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞乐播_CMS",
            "name": "🔞乐播┃CMS",
            "type": 1,
            "api": "https://lbapi9.com/api.php/provide/vod",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞奶香香_CMS",
            "name": "🔞奶香香┃CMS",
            "type": 1,
            "api": "https://naixxzy.com/api.php/provide/vod",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞森林_CMS",
            "name": "🔞森林┃CMS",
            "type": 1,
            "api": "http://slapibf.com/api.php/provide/vod",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞番茄_CMS",
            "name": "🔞番茄┃CMS",
            "type": 1,
            "api": "https://fqzy.me//api.php/provide/vod/?ac=list",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞鲨鱼_CMS",
            "name": "🔞鲨鱼┃CMS",
            "type": 1,
            "api": "https://shayuapi.com/api.php/provide/vod",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞91麻豆_CMS",
            "name": "🔞91麻豆┃CMS",
            "type": 1,
            "api": "http://91md.me/api.php/provide/vod",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞CK百货_CMS",
            "name": "🔞CK百货┃CMS",
            "type": 1,
            "api": "https://ckbh1.xyz/api.php/provide/vod/?ac=list",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞桃花_CMS",
            "name": "🔞桃花┃CMS",
            "type": 1,
            "api": "https://thzy1.me/api.php/provide/vod/?ac=list",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞豆豆_CMS",
            "name": "🔞豆豆┃CMS",
            "type": 1,
            "api": "https://doudouzy.com/api.php/provide/vod/?ac=list",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞色猫_CMS",
            "name": "🔞色猫┃CMS",
            "type": 1,
            "api": "http://caiji.semaozy.net/inc/apijson_vod.php",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞黑料X_CMS",
            "name": "🔞黑料X┃CMS",
            "type": 1,
            "api": "https://www.heiliaozyapi.com/api.php/provide/vod/?ac=list",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞香蕉_CMS",
            "name": "🔞香蕉┃CMS",
            "type": 1,
            "api": "https://www.xiangjiaozyw.com/api.php/provide/vod/?ac=list",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "🔞百万_CMS",
            "name": "🔞百万┃CMS",
            "type": 1,
            "api": "https://api.bwzyz.com/api.php/provide/vod/at/json",
            "searchable": 1,
            "quickSearch": 1
        },
        {
            "key": "仓库",
            "name": "🔞仓库",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": {
                "分类url": "https://xiangjiao.10010288.xyz/index.php/vod/type/id/{cateId}.html",
                "分类": "无码中字$28#有码中字$29#国产视频$30#欧美高清$31#动漫剧情$32"
            }
        },
        {
            "key": "风流",
            "name": "🔞风流",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": {
                "请求头": "User-Agent$MOBILE_UA",
                "编码": "UTF-8",
                "直接播放": "1",
                "分类": "日韩$1#偷拍$21#无码$22#自拍$23#巨乳$24#华人$25#嫩模$26#剧情$27#动漫$28#熟女$29#丝袜$30#欧美$32#有码$33#制服$34#口交$35#三级$31#",
                "分类url": "https://hekody.flsp8.boats/vodtype/{cateId}-{catePg}.html"
            }
        },
        {
            "key": "悠亚",
            "name": "🔞悠亚",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": "https://raw.githubusercontent.com/cxelva/xpg/refs/heads/main/js/三上悠亚.json"
        },
        {
            "key": "小妞",
            "name": "🔞小妞",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": {
                "分类url": "https://i3j4k5l6.hxxn19.cc/vodtype/{cateId}-{catePg}.html;;z",
                "发布": "hxxn99.cc",
                "数组": "<dl>&&</dl>",
                "标题": "<h3>&&</h3>",
                "图片": "data-original=\"&&\"",
                "副标题": "观影愉快",
                "链接": "href=\"&&\"[替换:voddetail>>vodplay#.html>>-1-1.html]",
                "分类数组": "<dd>&&</dd>",
                "分类标题": ">&&</a>",
                "分类": "乌鸦传媒$29#精东传媒$27#大象传媒$34#开心鬼传媒$35#麻豆传媒$21#迷你传媒$33#星空传媒$26#杏吧传媒$31#萝莉社$38#兔子先生$30#糖心视频$37#热门黑料$223#户外野战$224#偷拍自拍$225#顶流网红$229#日本字幕$41#国产视频$40#强奸乱伦$46#日本无码$44#欧美无码$45#国产传媒$42#制服诱惑$47#网曝黑料$53#激情动漫$49#影片解说$55#美女主播$48#明星换脸$50#抖阴视频$51#伦理三级$54#女优明星$52#捆绑调教$56#网红头条$60#极品媚黑$58#萝莉少女$57#VR视角$63#人妖系列$61#韩国主播$62#女同性恋$198#乱伦精品$210#欧美大炮$211#极品学妹$215#国产视频$216",
                "简介": ""
            }
        },
        {
            "key": "四A",
            "name": "🔞四A",
            "type": 3,
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "changeable": 1,
            "api": "csp_XBPQ",
            "ext": "https://raw.githubusercontent.com/cxelva/xpg/refs/heads/main/js/4AAAA.json"
        },
        {
            "key": "菜鸟",
            "name": "🔞菜鸟",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "style": {
                "ratio": 1.7
            },
            "ext": "https://raw.githubusercontent.com/cxelva/xpg/refs/heads/main/js/菜鸟资源.json"
        },
        {
            "key": "乱姐",
            "name": "🔞乱姐",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 0,
            "ext": {
                "分类url": "https://seyo26.xyz/yy/index.php/vod/type/id/{cateId}/page/{catePg}.html;;z",
                "分类": "强奸乱伦$253#明星换脸$254#调教视频$258#女同性恋$259#电影解说$247#欧美视频$248#网曝事件$249#中文字幕$240#无码视频$241#明星淫梦$244#日韩专区$245#伦理三级$239#性感主播$238#国产视频$234#动漫视频$246#国产传媒$236#萝莉少女$263#口交颜射$246#乱伦中文$265#探花约炮$266#极品学妹$267#强奸中文$269#制服诱惑$270#调教中文$271"
            }
        },
        {
            "key": "野鸡",
            "name": "🔞野鸡",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "请求头": "User-Agent$MOBILE_UA",
                "主页url": "https://wap.yejiav2.cc/yj/",
                "数组": "vod-img&&/div></div>",
                "标题": "+vod-txt*\">&&</a",
                "图片": "data-original=\"&&\"",
                "副标题": "<p&&/p>",
                "链接": "href=\"&&\"",
                "简介": "description\" content=\"&&\"",
                "分类url": "https://wap.yejiav2.cc/yj/index.php/vod/type/id/{cateId}/page/{catePg}.html",
                "线路标题": "&&",
                "播放数组": "<div class=\"group-box\"&&</div>",
                "播放列表": "<a&&/a>",
                "播放标题": ">&&</",
                "播放链接": "href=\"&&\"",
                "分类": "奥斯卡资源$119#野鸡资源$267#冷库资源$206#玉兔资源$302#155资源$244#国产精品$269#国产乱伦$322#日本无码$124#日本有码$123"
            }
        },
        {
            "key": "Missav",
            "name": "🔞Missav",
            "type": 3,
            "api": "https://raw.githubusercontent.com/cxelva/xpg/refs/heads/main/js/drpy2.min.js",
            "ext": "https://raw.githubusercontent.com/cxelva/xpg/refs/heads/main/js/Missav.js"
        },
        {
            "key": "逍遥",
            "name": "🔞逍遥",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": {
                "请求头": "User-Agent$MOBILE_UA",
                "编码": "UTF-8",
                "主页url": "http://www.9y9r.com/so-show/36-----------.html",
                "数组": "lazyload\"&&</a>",
                "标题": "title=\"&&\"",
                "图片": "data-original=\"&&\"",
                "副标题": "text-right\">&&</",
                "链接": "href=\"&&\"",
                "简介": "【友情提醒：请不要相信视频中的广告，以免上当受骗！】",
                "跳转播放链接": "var player_*\"url\":\"&&\"",
                "分类url": "http://www.9y9r.com/so-show/36-{cateId}-{by}---------{year}.html",
                "分类": "大陆&香港&台湾&美国&法国&英国&日本&韩国&德国&泰国&印度&意大利&西班牙&加拿大&其他"
            }
        },
        {
            "key": "伦理",
            "name": "🔞伦理",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": {
                "请求头": "User-Agent$MOBILE_UA",
                "编码": "UTF-8",
                "播放数组": "tab-content&&</ul>",
                "播放列表": "<a&&a>",
                "播放标题": ">&&<[不包含:夸克网盘]",
                "播放链接": "href=\"&&\"",
                "分类": "欧美视频$oumeilunli#香港伦理$xiangganglunli#韩国伦理$hanguolunli#日本伦理$ribenlunli#",
                "分类url": "https://www.yklunli.top/{cateId}/p{catePg}.html"
            }
        },
        {
            "key": "蜜桃",
            "name": "🔞蜜桃",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "请求头": "User-Agent$MOBILE_UA",
                "编码": "UTF-8",
                "数组": "<a&&</span></a>",
                "链接": "href=\"&&\"",
                "标题": "title=\"&&\"",
                "图片": "data-src=\"&&\"",
                "副标题": ">&&<span>",
                "线路标题": "在线播放",
                "简介": "alt=\"&&\"",
                "搜索模式": "1",
                "搜索url": "https://20260605bb-bnm.avriri01.top/index.php/vod/search/page/{pg}/wd/{wd}.html",
                "分类url": "https://20260605bb-bnm.avriri01.top/index.php/vod/type/id/{cateId}/page/{catePg}.html",
                "分类": "国产无码$guochanjingxuan#国产口爆$yazhoukoujiao#日韩无码$rihanwuma#阳台自拍$yangtaizipai#国产热门$yazhouqunjiao#海边偷拍$haibiantoupai#偷情车震$touqingchezhen#污污动漫$wuwudongman#拉拉群交$lalaqunjiao#Gay群交$gayqunjiao#欧美精选$oumeijingxuan#自慰手淫$ziweishouyin#N女群欢$nnvqunhuan#美臀诱惑$meitunyouhuo#麻豆传媒$madouchuanmei#天美传媒$tianmeichuanmei#皇家华人$huangjiahuaren#精东影业$jingdongyingye#起点传媒$qidianchuanmei#"
            }
        },
        {
            "key": "桃花",
            "name": "🔞桃花",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "style": {
                "ratio": 1.43
            },
            "quickSearch": 1,
            "filterable": 1,
            "ext": "https://raw.githubusercontent.com/cxelva/xpg/refs/heads/main/a/桃花.json"
        },
        {
            "key": "公子",
            "name": "🔞公子",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "style": {
                "ratio": 1.43
            },
            "quickSearch": 1,
            "filterable": 1,
            "ext": "https://raw.githubusercontent.com/cxelva/xpg/refs/heads/main/a/公子别走.json"
        },
        {
            "key": "精品",
            "name": "🔞精品",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "style": {
                "ratio": 1.43
            },
            "quickSearch": 1,
            "filterable": 1,
            "ext": "https://raw.githubusercontent.com/cxelva/xpg/refs/heads/main/a/超级精品.json"
        },
        {
            "key": "红薯",
            "name": "🔞红薯",
            "type": 3,
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "api": "https://raw.githubusercontent.com/cxelva/xpg/refs/heads/main/a/小红薯APP.py",
            "order_num": 5,
            "ext": ""
        },
        {
            "key": "少女",
            "name": "🔞少女",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "style": {
                "ratio": 1.43
            },
            "quickSearch": 1,
            "filterable": 1,
            "ext": "https://raw.githubusercontent.com/cxelva/xpg/refs/heads/main/a/魔法少女.json"
        },
        {
            "key": "自拍",
            "name": "🔞自拍",
            "type": 3,
            "playerType": 2,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "https://raw.githubusercontent.com/cxelva/xpg/refs/heads/main/a/偷拍自拍.json"
        },
        {
            "key": "成鸡",
            "name": "🔞成鸡",
            "type": 3,
            "playerType": 2,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "https://raw.githubusercontent.com/cxelva/xpg/refs/heads/main/a/成鸡思汉.json"
        },
        {
            "key": "五五",
            "name": "🔞五五",
            "type": 3,
            "playerType": 2,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "https://raw.githubusercontent.com/cxelva/xpg/refs/heads/main/a/55视频.json"
        },
        {
            "key": "纯粹",
            "name": "🔞纯粹",
            "type": 3,
            "playerType": 2,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "https://raw.githubusercontent.com/cxelva/xpg/refs/heads/main/a/一个纯粹的x站.json"
        },
        {
            "key": "经典",
            "name": "🔞经典",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "style": {
                "ratio": 1.43
            },
            "quickSearch": 1,
            "filterable": 1,
            "ext": "https://raw.githubusercontent.com/cxelva/xpg/refs/heads/main/a/经典三部曲.json"
        },
        {
            "key": "kemo",
            "name": "🔞kemo",
            "type": 3,
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "api": "https://raw.githubusercontent.com/cxelva/xpg/refs/heads/main/a/kemon.py",
            "order_num": 5,
            "ext": ""
        },
        {
            "key": "盲盒",
            "name": "🔞盲盒",
            "type": 3,
            "playerType": 2,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "https://raw.githubusercontent.com/cxelva/xpg/refs/heads/main/a/盲盒.json"
        },
        {
            "key": "凡人",
            "name": "🔞凡人",
            "type": 3,
            "playerType": 2,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "https://raw.githubusercontent.com/cxelva/xpg/refs/heads/main/a/凡人修色传.json"
        },
        {
            "key": "E佬",
            "name": "🔞E佬",
            "type": 3,
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "api": "https://raw.githubusercontent.com/cxelva/xpg/refs/heads/main/a/E佬通用视频.py",
            "order_num": 5,
            "ext": ""
        },
        {
            "key": "full",
            "name": "🔞full",
            "type": 3,
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "api": "https://raw.githubusercontent.com/cxelva/xpg/refs/heads/main/a/fullhd.py",
            "order_num": 5,
            "ext": ""
        },
        {
            "key": "风欲",
            "name": "🔞风欲",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": {
                "请求头": "User-Agent$MOBILE_UA",
                "编码": "UTF-8",
                "直接播放": "1",
                "分类": "乱伦$1#岀轨$2#制服$4#自慰$3#偷拍$5#自拍$20#国产$21#同性$22#日韩$23#欧美$24#三极$25#动漫$26#",
                "分类url": "https://cbx.fysn7.lat/cn/home/web/index.php/vod/type/id/{cateId}/page/{catePg}.html"
            }
        },
        {
            "key": "不良",
            "name": "🔞不良",
            "type": 3,
            "api": "https://raw.githubusercontent.com/cxelva/xpg/refs/heads/main/js/不良.js"
        },
        {
            "key": "记者",
            "name": "🔞记者",
            "type": 3,
            "api": "csp_XBPQ",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": {
                "请求头": "User-Agent$MOBILE_UA",
                "编码": "UTF-8",
                "主页url": "https://m7n8o9p0.bljz19.cc/gbook/",
                "数组": "1click&&</div></div>",
                "标题": "vod-txt\">*>&&<",
                "图片": "data-original=\"&&\"",
                "链接": "href=\"&&\"[替换:voddetail>>vodplay#.html>>-1-1.html]",
                "分类url": "https://m7n8o9p0.bljz19.cc/vodtype/{cateId}/page/{catePg}.html;;z",
                "分类数组": "<a&&/a>",
                "分类标题": ">&&<",
                "分类ID": "/vodtype/&&.html"
            }
        },
        {
            "key": "vnzyz",
            "name": "🔞越南",
            "type": 1,
            "api": "https://vnzyz.com/api.php/provide/vod",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "91av",
            "name": "🔞九一",
            "type": 1,
            "api": "https://91av.cyou/api.php/provide/vod",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "xiaojizy",
            "name": "🔞小鸡",
            "type": 1,
            "api": "https://api.xiaojizy.live/provide/vod",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "ddapi",
            "name": "🔞滴滴",
            "type": 1,
            "api": "https://api.ddapi.cc/api.php/provide/vod",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "xrbsp",
            "name": "🔞淫水",
            "type": 1,
            "api": "https://www.xrbsp.com/api/json.php",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "gdlsp",
            "name": "🔞香奶",
            "type": 1,
            "api": "https://www.gdlsp.com/api/json.php",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "bhziyuan",
            "name": "🔞百花",
            "type": 1,
            "api": "https://bhziyuan.com/api.php/provide/vod/?ac=list",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "kxgav",
            "name": "🔞白嫖",
            "type": 1,
            "api": "https://www.kxgav.com/api/json.php",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "lbapi9",
            "name": "🔞乐播",
            "type": 1,
            "api": "https://lbapi9.com/api.php/provide/vod",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "doudouzy",
            "name": "🔞豆豆",
            "type": 1,
            "api": "https://doudouzy.com/api.php/provide/vod/?ac=list",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "heiliaozyapi",
            "name": "🔞黑料X",
            "type": 1,
            "api": "https://www.heiliaozyapi.com/api.php/provide/vod/?ac=list",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        }            
    ],
    "parses": [
         {
            "name": "聚合",
            "type": 3,
            "url": "Web"
        },
        {
            "name": "极速4k",
            "type": 1,
            "url": "http://miyao1.wk57.top/iJKHhGGigLJGiH666.php?url=",
            "ext": {
                "flag": [
                    "qq",
                    "腾讯",
                    "qiyi",
                    "爱奇艺",
                    "奇艺",
                    "youku",
                    "优酷",
                    "tucheng",
                    "sohu",
                    "搜狐",
                    "letv",
                    "乐视",
                    "mgtv",
                    "芒果",
                    "tnmb",
                    "seven",
                    "yzm",
                    "aliyun",
                    "RJuMao",
                    "bilibili",
                    "1905",
                    "xinvip",
                    "XAL",
                    "qiqi",
                    "XALS",
                    "YuMi-vip"
                ]
            }
        },            
        {
            "name": "虾米",
            "type": 0,
            "url": "https://jx.xmflv.com/?url=",
            "ext": {
                "header": {
                    "user-agent": "Mozilla/5.0 (Linux; Android 13; V2049A Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/116.0.0.0 Mobile Safari/537.36"
                }
            }
        },
        {
            "name": "云解",
            "type": 0,
            "url": "https://yparse.ik9.cc/index.php?url=",
            "ext": {
                "header": {
                    "user-agent": "Mozilla/5.0 (Linux; Android 13; V2049A Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/116.0.0.0 Mobile Safari/537.36"
                }
            }
        },
        {
            "name": "咸鱼",
            "type": 0,
            "url": "https://jx.xymp4.cc/?url=",
            "ext": {
                "header": {
                    "user-agent": "Mozilla/5.0 (Linux; Android 13; V2049A Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/116.0.0.0 Mobile Safari/537.36"
                }
            }
        },
        {
            "name": "淘片",
            "type": 0,
            "url": "https://jx.yparse.com/index.php?url=",
            "ext": {
                "header": {
                    "user-agent": "Mozilla/5.0 (Linux; Android 13; V2049A Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/116.0.0.0 Mobile Safari/537.36"
                }
            }
        },
        {
            "name": "冰豆",
            "type": 0,
            "url": "https://bd.jx.cn/?url=",
            "ext": {
                "header": {
                    "user-agent": "Mozilla/5.0 (Linux; Android 13; V2049A Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/116.0.0.0 Mobile Safari/537.36"
                }
            }
        },
        {
            "name": "七七",
            "type": 0,
            "url": "https://jx.77flv.cc/?url=",
            "ext": {
                "header": {
                    "user-agent": "Mozilla/5.0 (Linux; Android 13; V2049A Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/116.0.0.0 Mobile Safari/537.36"
                }
            }
        },
        {
            "name": "盘古",
            "type": 0,
            "url": "https://www.playm3u8.cn/jiexi.php?url=",
            "ext": {
                "header": {
                    "user-agent": "Mozilla/5.0 (Linux; Android 13; V2049A Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/116.0.0.0 Mobile Safari/537.36"
                }
            }
        },
        {
            "name": "夜幕",
            "type": 0,
            "url": "https://yemu.xyz/?url=",
            "ext": {
                "header": {
                    "user-agent": "Mozilla/5.0 (Linux; Android 13; V2049A Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/116.0.0.0 Mobile Safari/537.36"
                }
            }
        }
    ],
    "rules": [
        {
            "name": "农民",
            "hosts": [
                "toutiaovod.com"
            ],
            "regex": [
                "video/tos/cn"
            ]
        },
        {
            "name": "火山",
            "hosts": [
                "huoshan.com"
            ],
            "regex": [
                "item_id="
            ]
        },
        {
            "name": "抖音",
            "hosts": [
                "douyin.com"
            ],
            "regex": [
                "is_play_url="
            ]
        },
             {
            "name": "磁力广告",
            "hosts": [
                "magnet"
            ],
            "regex": [
                "更多",
                "请访问",
                "example",
                "社 區",
                "x u u",
                "直 播",
                "更 新",
                "社 区",
                "有趣",
                "有 趣",
                "英皇体育",
                "全中文AV在线",
                "澳门皇冠赌场",
                "哥哥快来",
                "美女荷官",
                "裸聊",
                "新片首发",
                "UUE29"
            ]
        },
            
        {
            "name": "饭团点击",
            "hosts": [
                "dadagui",
                "freeok",
                "dadagui"
            ],
            "script": [
                "document.querySelector(\"#playleft iframe\").contentWindow.document.querySelector(\"#start\").click();"
            ]
        },
        {
            "name": "毛驴点击",
            "hosts": [
                "www.maolvys.com"
            ],
            "script": [
                "document.getElementsByClassName('swal-button swal-button--confirm')[0].click()"
            ]
        },
        {
            "name": "ofiii",
            "hosts": [
                "www.ofiii.com"
            ],
            "script": [
                "const play=document.getElementsByClassName('play_icon')[0],event=new MouseEvent('click',{bubbles:!0,cancelable:!0,view:window,screenX:100,screenY:100,clientX:50,clientY:50,button:0,shiftKey:!1,ctrlKey:!1,altKey:!1,metaKey:!1,modifierState:0});play.dispatchEvent(event);"
            ]
        }
    ],
    "doh": [
        {
            "name": "Google",
            "url": "https://dns.google/dns-query",
            "ips": [
                "8.8.4.4",
                "8.8.8.8"
            ]
        },
        {
            "name": "Cloudflare",
            "url": "https://cloudflare-dns.com/dns-query",
            "ips": [
                "1.1.1.1",
                "1.0.0.1",
                "2606:4700:4700::1111",
                "2606:4700:4700::1001"
            ]
        },
        {
            "name": "AdGuard",
            "url": "https://dns.adguard.com/dns-query",
            "ips": [
                "94.140.14.140",
                "94.140.14.141"
            ]
        },
        {
            "name": "DNSWatch",
            "url": "https://resolver2.dns.watch/dns-query",
            "ips": [
                "84.200.69.80",
                "84.200.70.40"
            ]
        },
        {
            "name": "Quad9",
            "url": "https://dns.quad9.net/dns-quer",
            "ips": [
                "9.9.9.9",
                "149.112.112.112"
            ]
        }
    ],
    "hosts": [
        "cache.ott.*.itv.cmvideo.cn=base-v4-free-mghy.e.cdn.chinamobile.com",
        "cache.ott.ystenlive.itv.cmvideo.cn=base-v4-free-mghy.e.cdn.chinamobile.com",
        "cache.ott.bestlive.itv.cmvideo.cn=base-v4-free-mghy.e.cdn.chinamobile.com",
        "cache.ott.wasulive.itv.cmvideo.cn=base-v4-free-mghy.e.cdn.chinamobile.com",
        "cache.ott.fifalive.itv.cmvideo.cn=base-v4-free-mghy.e.cdn.chinamobile.com",
        "cache.ott.hnbblive.itv.cmvideo.cn=base-v4-free-mghy.e.cdn.chinamobile.com"
    ],
    "lives": [
        
        {
            "name": "虎牙一起看",
            "type": 0,
            "url": "https://sub.ottiptv.cc/huyayqk.m3u",
            "playerType": 2,
            "timeout": 10,
            "ua": "okHttp/Mod-1.5.0.0"
        },
        {
            "name": "斗鱼一起看",
            "type": 0,
            "url": "https://sub.ottiptv.cc/douyuyqk.m3u",
            "playerType": 2,
            "timeout": 10,
            "ua": "okHttp/Mod-1.5.0.0"
        },
        {
            "name": "B站直播",
            "type": 0,
            "url": "https://sub.ottiptv.cc/bililive.m3u",
            "playerType": 2,
            "timeout": 10,
            "ua": "okHttp/Mod-1.5.0.0"
        },
        {
            "name": "YY轮播",
            "type": 0,
            "url": "https://sub.ottiptv.cc/yylunbo.m3u",
            "playerType": 2,
            "timeout": 10,
            "ua": "okHttp/Mod-1.5.0.0"
        }
    ],
    "flags": [
        "youku",
        "优酷",
        "优 酷",
        "优酷视频",
        "qq",
        "腾讯",
        "腾 讯",
        "腾讯视频",
        "iqiyi",
        "qiyi",
        "奇艺",
        "爱奇艺",
        "爱 奇 艺",
        "m1905",
        "xigua",
        "letv",
        "leshi",
        "乐视",
        "乐 视",
        "sohu",
        "搜狐",
        "搜 狐",
        "搜狐视频",
        "tudou",
        "pptv",
        "mgtv",
        "芒果",
        "imgo",
        "芒果TV",
        "芒 果 T V",
        "bilibili",
        "哔 哩",
        "哔 哩 哔 哩"
    ],
    "ijk": [
        {
            "group": "软解码",
            "options": [
                {
                    "category": 4,
                    "name": "opensles",
                    "value": "0"
                },
                {
                    "category": 4,
                    "name": "overlay-format",
                    "value": "842225234"
                },
                {
                    "category": 4,
                    "name": "framedrop",
                    "value": "1"
                },
                {
                    "category": 4,
                    "name": "soundtouch",
                    "value": "1"
                },
                {
                    "category": 4,
                    "name": "start-on-prepared",
                    "value": "1"
                },
                {
                    "category": 1,
                    "name": "http-detect-range-support",
                    "value": "0"
                },
                {
                    "category": 1,
                    "name": "fflags",
                    "value": "fastseek"
                },
                {
                    "category": 2,
                    "name": "skip_loop_filter",
                    "value": "48"
                },
                {
                    "category": 4,
                    "name": "reconnect",
                    "value": "1"
                },
                {
                    "category": 4,
                    "name": "enable-accurate-seek",
                    "value": "0"
                },
                {
                    "category": 4,
                    "name": "mediacodec",
                    "value": "0"
                },
                {
                    "category": 4,
                    "name": "mediacodec-auto-rotate",
                    "value": "0"
                },
                {
                    "category": 4,
                    "name": "mediacodec-handle-resolution-change",
                    "value": "0"
                },
                {
                    "category": 4,
                    "name": "mediacodec-hevc",
                    "value": "0"
                },
                {
                    "category": 1,
                    "name": "dns_cache_timeout",
                    "value": "600000000"
                }
            ]
        },
        {
            "group": "硬解码",
            "options": [
                {
                    "category": 4,
                    "name": "opensles",
                    "value": "0"
                },
                {
                    "category": 4,
                    "name": "overlay-format",
                    "value": "842225234"
                },
                {
                    "category": 4,
                    "name": "framedrop",
                    "value": "1"
                },
                {
                    "category": 4,
                    "name": "soundtouch",
                    "value": "1"
                },
                {
                    "category": 4,
                    "name": "start-on-prepared",
                    "value": "1"
                },
                {
                    "category": 1,
                    "name": "http-detect-range-support",
                    "value": "0"
                },
                {
                    "category": 1,
                    "name": "fflags",
                    "value": "fastseek"
                },
                {
                    "category": 2,
                    "name": "skip_loop_filter",
                    "value": "48"
                },
                {
                    "category": 4,
                    "name": "reconnect",
                    "value": "1"
                },
                {
                    "category": 4,
                    "name": "enable-accurate-seek",
                    "value": "0"
                },
                {
                    "category": 4,
                    "name": "mediacodec",
                    "value": "1"
                },
                {
                    "category": 4,
                    "name": "mediacodec-auto-rotate",
                    "value": "1"
                },
                {
                    "category": 4,
                    "name": "mediacodec-handle-resolution-change",
                    "value": "1"
                },
                {
                    "category": 4,
                    "name": "mediacodec-hevc",
                    "value": "1"
                },
                {
                    "category": 1,
                    "name": "dns_cache_timeout",
                    "value": "600000000"
                }
            ]
        }
    ],
    "ads": [
        "static-mozai.4gtv.tv"
    ]
}
