{
    "spider": "./spider.jar",
    "wallpaper": "https://wp.upx8.com/api.php",
    "warningText": "tvbox提示语",
    "logo": "./logo.gif",
    "notice": "",
    "sites": [
        {
            "key": "豆瓣",
            "name": "豆瓣丨首页",
            "type": 3,
            "api": "csp_Douban",
            "ext":"./json/douban.json",
            "jar": "./测试.jar"
        },
        {
            "name": "LEO| 弹幕",
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
            "name": "配置｜中心",
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
            "name": "电视丨直播",
            "type": 3,
            "searchable": 0,
            "changeable": 0,
            "api": "./lib/zbzdb.js",
            "ext": "./lib/zbzdb.json"
        },
        {
            "key": "py_资源管理PY",
            "name": "🌟资源管理",
            "api": "./py1/资源管理.py",
            "filterable": 1,
            "quickSearch": 1,
            "searchable": 1,
            "type": 3
        },
        {
            "key": "py_资理PY",
            "name": "🌟资理",
            "api": "./py1/虎牙.py",
            "filterable": 1,
            "quickSearch": 1,
            "searchable": 1,
            "type": 3
        },
        {
            "key": "YGP",
            "name": "预告🔹新片",
            "type": 3,
            "api": "csp_YGP",
            "searchable": 1,
            "changeable": 1
        },
        {
            "key": "4KVM.py",
            "name": "4KVM.py",
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
            "name": "kf直播",
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
            "name": "一起看App",
            "api": "./py/月光.py",
            "filterable": 1,
            "quickSearch": 1,
            "searchable": 1,
            "type": 3
        },
        {
            "key": "本地",
            "name": "本地🔹视频",
            "type": 3,
            "api": "csp_LocalFile"
        },
        {
            "key": "zbxdb",
            "name": "📺︎zbxdb📺",
            "type": 3,
            "api": "./js/apiv209zbzdb.js",
            "ext": "./json/zbxdb.json"
        },
        {
            "key": "斗鱼",
            "name": "斗鱼丨直播",
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
            "name": "虎牙丨直播",
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
            "name": "🎬恐怖电影全集📲",
            "type": 3,
            "api": "http://zizhuyun.top/yuan/jy/lib/16.js",
            "ext": "http://zizhuyun.top/yuan/jy/lib/2400.js"
        },
        {
            "key": "hhh",
            "name": "💅truvaze",
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
            "name": "涩涩熊猫",
            "type": 3,
            "api": "csp_XMVideo",
            "searchable": 1,
            "filterable": 1,
            "jar": "./jar/182.jar"
        },
        {
            "key": "jianpian",
            "name": "荐片",
            "type": 3,
            "api": "./js/荐片.js",
            "searchable": 1,
            "filterable": 1,
            "changeable": 1,
            "ext": ""
        },
        {
            "key": "采集集合",
            "name": "🔞️ 采集集合✨",
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
            "name": "热播｜APP",
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
            "name": "三秋｜APP",
            "type": 3,
            "api": "csp_App3Q"
        },
        {
            "key": "韩圈",
            "name": "韩圈｜APP",
            "type": 3,
            "api": "csp_Hxq",
            "ext": "http://www.小不点.com/api/2026/fishhxq.php"
        },
        {
            "key": "听心99",
            "name": "听心｜APP",
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
            "name": "橙子丨APP",
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
            "key": "追番99",
            "name": "追番｜APP",
            "type": 3,
            "api": "csp_App99",
            "ext": {
                "host": "https://api.hboqy.cn.hboqy.cn/api",
                "LoginPath": "/app/log",
                "appkey": "a0a18659a9977a47e53442cd084b536c",
                "versionName": "6.1.7",
                "name": "追番达人",
                "package": "com.android.packageinstaller",
                "buildNumber": "2002",
                "buildSignature": "A40DA80A59D170CAA950CF15C18C454D47A39B26989D8B640ECD745BA71BF5DC"
            }
        },
        {
            "key": "咕噜99",
            "name": "咕噜丨APP",
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
            "key": "剧圈99",
            "name": "剧圈丨APP",
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
            "name": "双星丨APP",
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
            "name": "顾我丨APP",
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
            "name": "天堂｜APP",
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
            "name": "橘汁｜APP",
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
            "name": "华谊｜APP",
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
            "name": "苹果｜APP",
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
            "name": "薯条｜APP",
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
            "name": "久久｜APP",
            "type": 3,
            "api": "csp_AppYsV2",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "http://99cms.jj99.icu:8199/api.php/app/"
        },
        {
            "key": "闪影",
            "name": "闪影｜APP",
            "type": 3,
            "api": "csp_AppYsV2",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "http://38.47.213.61:41271/mogai_api.php/v1.vod"
        },
        {
            "key": "飞飞",
            "name": "飞飞丨APP",
            "type": 3,
            "api": "csp_AppYsV2",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "https://qpcj.69mini.com/api.php/app/"
        },
        {
            "key": "云播",
            "name": "云播｜APP",
            "type": 3,
            "api": "csp_AppFox",
            "searchable": 1,
            "changeable": 1,
            "ext": {
                "host": "http://app.hktvyb.cc"
            }
        },
        {
            "key": "首发",
            "name": "首发｜APP",
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
            "name": "金牌｜APP",
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
            "name": "老鹰｜APP",
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
            "name": "蓝鹰｜APP",
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
            "name": "猎豹｜APP",
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
            "key": "映画",
            "name": "映画｜APP",
            "type": 3,
            "api": "csp_AppGet",
            "searchable": 1,
            "changeable": 1,
            "ext": {
                "url": "https://cms140.yhg.one",
                "dataKey": "bM7iC9eA3oZ1nB7z",
                "dataIv": "bM7iC9eA3oZ1nB7z"
            }
        },
        {
            "key": "王子",
            "name": "王子｜APP",
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
            "name": "秒看｜APP",
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
            "name": "茉莉｜APP",
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
            "name": "灵虎｜APP",
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
            "name": "哔哩｜视频",
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
            "name": "三六零｜视频",
            "type": 3,
            "api": "csp_SP360"
        },
        {
            "key": "玩偶",
            "name": "玩偶｜4K",
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
            "name": "快映｜4K",
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
            "name": "木偶｜4K",
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
            "name": "蜡笔｜4K",
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
            "name": "至臻｜4K",
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
            "name": "多多｜4K",
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
            "name": "欧哥｜4K",
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
            "name": "二小｜4K",
            "type": 3,
            "api": "csp_PanWebShare",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "changeable": 1,
            "ext": {
                "site": [
                    "https://www.2xiaopan.top",
                    "https://2xiaopan.top",
                    "https://www.erxiaozhan.top",
                    "https://www.2xiaozhan.top",
                    "https://wexwp.cc"
                ]
            },
            "timeout": 60
        },
        {
            "key": "虎斑",
            "name": "虎斑｜4K",
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
            "key": "闪电",
            "name": "闪电｜4K",
            "type": 3,
            "api": "csp_PanWebShare",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "changeable": 1,
            "ext": {
                "site": [
                    "https://shandian.blog",
                    "https://sd.sduc.site"
                ]
            },
            "timeout": 60
        },
        {
            "key": "夸克",
            "name": "夸克｜4K",
            "type": 3,
            "api": "csp_PanWebShareKK",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "changeable": 1,
            "ext": {
                "site": [
                    "https://www.quarktv.cc"
                ]
            },
            "timeout": 60
        },
        {
            "key": "夸父",
            "name": "夸父｜4K",
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
            "name": "盘它｜4K",
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
            "name": "123｜4K",
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
            "name": "指南｜4K",
            "type": 3,
            "api": "csp_4KZhinan",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "timeout": 60
        },
        {
            "key": "人人",
            "name": "人人｜4K",
            "type": 3,
            "api": "csp_RenRen",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "timeout": 60
        },
        {
            "key": "即刻",
            "name": "即刻｜4K",
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
            "name": "双星｜4K",
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
            "name": "围观｜短剧",
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
            "name": "星芽｜短剧",
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
            "name": "独播｜影视",
            "type": 3,
            "api": "csp_Duboku"
        },
        {
            "key": "厂长影视",
            "name": "厂长｜影视",
            "type": 3,
            "api": "csp_Czsapp",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "https://www.czzy89.com"
        },
        {
            "key": "金牌影视",
            "name": "金牌｜影视",
            "type": 3,
            "api": "csp_Jpys",
            "ext": "https://y2s52n7.com,https://m.hkybqufgh.com,https://m.sizhengxt.com,https://m.9zhoukj.com,https://m.sizhengxt.com,https://m.jiabaide.cn"
        },
        {
            "key": "瓜子影视",
            "name": "瓜子｜影视",
            "type": 3,
            "api": "csp_Gz360"
        },
        {
            "key": "骚火影视",
            "name": "骚火｜影视",
            "type": 3,
            "api": "csp_SaoHuo",
            "ext": "https://shdy5.us"
        },
        {
            "key": "农民影视",
            "name": "农民｜影视",
            "type": 3,
            "api": "csp_Wwys",
            "ext": "https://vip.wwgz.cn:5200"
        },
        {
            "key": "爱看机器人",
            "name": "爱看｜影视",
            "type": 3,
            "api": "csp_Ikanbot",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "小镇影视",
            "name": "小镇｜影视",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": "./XBPQ/小镇影视.json"
        },
        {
            "key": "面包影视",
            "name": "面包｜影视",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": "./XBPQ/面包影视.json"
        },
        {
            "key": "永乐影视",
            "name": "永乐｜影视",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": "./XBPQ/永乐影视.json"
        },
        {
            "key": "剧圈影视",
            "name": "剧圈｜影视",
            "type": 3,
            "api": "csp_XYQHiker",
            "ext": "./XYQHiker/剧圈影视.json"
        },
        {
            "key": "1905",
            "name": "1905｜影视",
            "type": 3,
            "api": "csp_Web1905",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0
        },
        {
            "key": "哆啦新番社",
            "name": "哆啦｜新番社",
            "type": 3,
            "api": "csp_XBPQ",
            "style": {
                "type": "list"
            },
            "ext": "./XBPQ/哆啦新番社.json"
        },
        {
            "key": "Anime1",
            "name": "A1｜动漫",
            "type": 3,
            "api": "./js/drpy2.min.js",
            "ext": "./js/Anime1.js"
        },
        {
            "key": "漫国动漫",
            "name": "漫国丨动漫",
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
            "name": "方舟丨动漫",
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
            "name": "番薯丨动漫",
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
            "name": "曼波｜动漫",
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
            "name": "咕咕｜动漫",
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
            "name": "巴士｜动漫",
            "type": 3,
            "api": "csp_XYQHiker",
            "ext": "./XYQHiker/巴士动漫.json"
        },
        {
            "key": "路漫漫",
            "name": "路漫漫｜动漫",
            "type": 3,
            "api": "./js/drpy2.min.js",
            "ext": "./js/路漫漫.js"
        },
        {
            "key": "去看吧",
            "name": "去看吧｜动漫",
            "type": 3,
            "api": "./js/drpy2.min.js",
            "ext": "./js/去看吧.js"
        },
        {
            "key": "荐片",
            "name": "荐片｜磁力",
            "api": "csp_JianPian",
            "type": 3
        },
        {
            "key": "修罗",
            "name": "修罗｜磁力",
            "api": "csp_Xlys",
            "type": 3,
            "ext": "https://xl02.com.de"
        },
        {
            "key": "七味",
            "name": "七味｜磁力",
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
            "name": "80S｜磁力",
            "type": 3,
            "api": "csp_BLSGod",
            "playerType": 1,
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "New6v",
            "name": "New6V｜磁力",
            "type": 3,
            "api": "csp_New6v",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "https://www.xb6v.com"
        },
        {
            "key": "美剧迷",
            "name": "美剧迷｜磁力",
            "type": 3,
            "api": "csp_MeijuMi",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "迅雷吧",
            "name": "迅雷吧｜磁力",
            "type": 3,
            "api": "csp_Xunlei8",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "https://xunlei8.me"
        },
        {
            "key": "电影港",
            "name": "电影港｜磁力",
            "type": 3,
            "api": "csp_XYQHiker",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "./XYQHiker/电影港.json"
        },
        {
            "key": "电影天堂",
            "name": "电影天堂｜磁力",
            "type": 3,
            "api": "csp_DyGod",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "阿里云盘",
            "name": "阿里｜云盘",
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
            "name": "夸克｜网盘",
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
            "name": "UC｜网盘",
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
            "name": "百度｜网盘",
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
            "name": "盘搜｜搜索",
            "type": 3,
            "api": "csp_PanSou",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "timeout": 60
        },
        {
            "key": "糖果",
            "name": "糖果｜搜索",
            "type": 3,
            "api": "csp_TGSou",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "timeout": 60
        },
        {
            "key": "兄弟",
            "name": "兄弟｜搜索",
            "type": 3,
            "api": "csp_XiongdiPan",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "timeout": 60
        },
        {
            "key": "九七",
            "name": "九七｜搜索",
            "type": 3,
            "api": "csp_97Sou",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "timeout": 60
        },
        {
            "key": "百酷",
            "name": "百酷｜搜索",
            "type": 3,
            "api": "csp_Baiku",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "timeout": 60
        },
        {
            "key": "米搜",
            "name": "米搜｜搜索",
            "type": 3,
            "api": "csp_MiSou",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "timeout": 60
        },
        {
            "key": "鬼鬼",
            "name": "鬼鬼｜搜索",
            "type": 3,
            "api": "csp_GuiGui",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "timeout": 60
        },
        {
            "key": "混合",
            "name": "混合｜搜索",
            "type": 3,
            "api": "csp_HunHePan",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "timeout": 60
        },
        {
            "key": "天翼",
            "name": "天翼｜搜索",
            "type": 3,
            "api": "csp_TianYiSou",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "timeout": 60
        },
        {
            "key": "趣盘",
            "name": "趣盘｜搜索",
            "type": 3,
            "api": "csp_QuPanSo",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0,
            "timeout": 60
        },
        {
            "key": "88看球",
            "name": "88｜看球",
            "type": 3,
            "api": "csp_Kanqiu",
            "gridview": 3,
            "style": {
                "type": "list"
            }
        },
        {
            "key": "球通体育",
            "name": "球通｜体育",
            "type": 3,
            "api": "csp_QiutongTY",
            "style": {
                "type": "list"
            }
        },
        {
            "key": "瓜子体育",
            "name": "瓜子｜体育",
            "type": 3,
            "api": "csp_GuaziTY",
            "style": {
                "type": "list"
            }
        },
        {
            "key": "919体育",
            "name": "919｜体育",
            "type": 3,
            "api": "csp_919TY",
            "style": {
                "type": "list"
            }
        },
        {
            "key": "呦呦DJ",
            "name": "呦呦｜DJ",
            "type": 3,
            "api": "csp_Djuu",
            "style": {
                "type": "list"
            }
        },
        {
            "key": "轮回DJ",
            "name": "轮回｜DJ",
            "type": 3,
            "api": "csp_Djlh",
            "style": {
                "type": "list"
            }
        },
        {
            "key": "蜻蜓FM",
            "name": "蜻蜓｜FM",
            "type": 3,
            "api": "csp_QingtingFM",
            "style": {
                "type": "list"
            }
        },
        {
            "key": "世界听书",
            "name": "世界｜听书",
            "type": 3,
            "api": "csp_TingShijie",
            "style": {
                "type": "list"
            }
        },
        {
            "key": "戏曲多多",
            "name": "戏曲｜多多",
            "type": 3,
            "api": "csp_AppLY",
            "style": {
                "type": "list"
            }
        },
        {
            "key": "爱听音乐",
            "name": "爱听｜音乐",
            "type": 3,
            "api": "./py/爱听音乐.py"
        },
        {
            "key": "网络直播",
            "name": "网络｜直播",
            "type": 3,
            "api": "./py/网络直播.py"
        },
        {
            "key": "哔哩直播",
            "name": "哔哩｜直播",
            "type": 3,
            "api": "./py/哔哩直播.py"
        },
        {
            "key": "哔哩合集",
            "name": "哔哩｜合集",
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
            "name": "哔哩｜音乐",
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
            "name": "哔哩｜听书",
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
            "name": "哔哩｜相声",
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
            "name": "哔哩｜小品",
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
            "name": "🌟全能王",
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
            "name": "🍰永乐",
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
            "name": "🎁面包",
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
            "name": "闪影资源",
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
            "name": "采集全集",
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
            "name": "360丨影视",
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
            "name": "采集┃解析",
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
            "name": "片吧┃影视",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": {
                "分类url": "https://www.ipianba.com/class/{cateId}-{area}-{by}--{lang}----{catePg}---{year}.html",
                "分类": "电影$1#剧集$2"
            }
        },
        {
            "key": "雨见视频",
            "name": "雨见丨影视",
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
            "name": "饭团丨影视",
            "api": "./py/饭团影视.py",
            "filterable": 1,
            "quickSearch": 1,
            "searchable": 1,
            "type": 3
        },
        {
            "key": "虎牙资源",
            "name": "虎牙资源",
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
            "name": "小镇影视",
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
            "name": "影视大全",
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
            "name": "电视天堂",
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
            "name": "影院大全",
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
            "name": "全民影视",
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
            "name": "雨见蓝光",
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
            "name": "可可影视",
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
            "name": "毒舌影视",
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
            "name": "片吧影视",
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
            "name": "猫咪影院",
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
            "name": "狐君丨磁力",
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
            "name": "优质影视",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": {
                "分类url": "https://www.myripon.com/index.php/vod/show/id/{cateId}/page/{catePg}.html",
                "分类": "国产剧$13#电影$1#电视剧$2#综艺$3#动漫$4"
            }
        },
        {
            "key": "永乐影视",
            "name": "永乐影视",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": {
                "分类url": "https://www.ylys.tv/vodshow/{cateId}--------{catePg}---/",
                "分类": "国产剧$13#电视剧$2#电影$1#综艺$3#动漫$4"
            }
        },
        {
            "key": "csp_红狐狸",
            "name": "狐狸影视",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": {
                "分类url": "https://honghuli.com/show/{cateId}-{area}-------{catePg}---{year}.html",
                "分类": "电影$1#电视剧$2#综艺$3#动漫$4"
            }
        },
        {
            "key": "py_symx_film",
            "name": "蓝光丨影视",
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
            "name": "云播｜影视",
            "type": 3,
            "api": "csp_Tvyb"
        },
        {
            "key": "奇优影视",
            "name": "奇优｜影视",
            "type": 3,
            "api": "csp_Qiyou"
        },
        {
            "key": "久久",
            "name": "久久｜APP",
            "type": 3,
            "api": "csp_AppYsV2",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "http://99cms.jj99.icu:8199/api.php/app/"
        },
        {
            "key": "奴娜",
            "name": "奴娜丨APP",
            "type": 3,
            "api": "csp_AppYsV2",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "https://www.nntv.in/api.php/v1.vod"
        },
        {
            "key": "闪影",
            "name": "闪影｜APP",
            "type": 3,
            "api": "csp_AppYsV2",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "http://38.47.213.61:41271/mogai_api.php/v1.vod"
        },
        {
            "key": "超前",
            "name": "超前丨APP",
            "type": 3,
            "api": "csp_AppYsV2",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "http://chaoqianys.top:91/api.php/app/"
        },
        {
            "key": "飞飞",
            "name": "飞飞丨APP",
            "type": 3,
            "api": "csp_AppYsV2",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1,
            "ext": "https://qpcj.69mini.com/api.php/app/"
        },
        {
            "key": "云播",
            "name": "云播｜APP",
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
            "name": "哔哩｜视频",
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
            "name": "腾讯｜视频",
            "type": 3,
            "api": "./js/drpy2.min.js",
            "ext": "./js/腾讯视频.js"
        },
        {
            "key": "优酷视频",
            "name": "优酷｜视频",
            "type": 3,
            "api": "./js/drpy2.min.js",
            "ext": "./js/优酷视频.js"
        },
        {
            "key": "芒果视频",
            "name": "芒果｜视频",
            "type": 3,
            "api": "./js/drpy2.min.js",
            "ext": "./js/芒果视频.js"
        },
        {
            "key": "爱奇艺",
            "name": "爱奇异｜视频",
            "type": 3,
            "api": "./js/drpy2.min.js",
            "ext": "./js/爱奇艺.js"
        },
        {
            "key": "西瓜视频",
            "name": "西瓜｜视频",
            "type": 3,
            "api": "./js/drpy2.min.js",
            "ext": "./js/西瓜.js"
        },
        {
            "key": "三六零",
            "name": "三六零｜视频",
            "type": 3,
            "api": "csp_SP360"
        },
        {
            "key": "金牌影视",
            "name": "金牌｜影视",
            "type": 3,
            "api": "csp_Jpys",
            "ext": "https://m.hkybqufgh.com,https://m.sizhengxt.com,https://m.9zhoukj.com,https://m.sizhengxt.com,https://m.jiabaide.cn"
        },
        {
            "key": "云播影视",
            "name": "云播｜影视",
            "type": 3,
            "api": "csp_Tvyb",
            "ext": "http://www.viptv01.com"
        },
        {
            "key": "奇优影视",
            "name": "奇优｜影视",
            "type": 3,
            "api": "csp_Qiyou"
        },
        {
            "key": "瓜子影视",
            "name": "瓜子｜影视",
            "type": 3,
            "api": "csp_Gz360",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "采集之王",
            "name": "采集｜合集",
            "type": 3,
            "api": "./js/drpy2.min.js",
            "ext": "./js/采集之王.js?type=url&params=../json/采集静态.json$1$1"
        },
        {
            "key": "如意资源",
            "name": "如意丨资源",
            "type": 1,
            "api": "https://cj.rycjapi.com/api.php/provide/vod/at/json/",
            "playerType": 1,
            "searchable": 1,
            "changeable": 1
        },
        {
            "key": "爱看机器人",
            "name": "爱看｜影视",
            "type": 3,
            "api": "csp_Ikanbot",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "永乐影视",
            "name": "永乐｜影视",
            "type": 3,
            "api": "csp_HBPQ",
            "ext": "./XBPQ/永乐影视.json"
        },
        {
            "key": "骚火影视",
            "name": "骚火｜影视",
            "type": 3,
            "api": "csp_SaoHuo",
            "playerType": 2,
            "ext": "https://shdy5.us"
        },
        {
            "key": "1905",
            "name": "1905｜影视",
            "type": 3,
            "api": "csp_Web1905",
            "searchable": 1,
            "quickSearch": 0,
            "filterable": 0
        },
        {
            "key": "xiaozhen",
            "name": "小镇🔹低",
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
            "name": "零果🔹低",
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
            "name": "电影🔹低",
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
            "name": "影视🔹低",
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
            "name": "雨见🔹低",
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
            "name": "茶狐采集",
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
            "name": "app影视",
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
            "name": "大师兄影视",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": {
                "分类url": "https://www.dsxysproo.com/dqvodshow/{cateId}-{area}--{class}-----{catePg}---{year}.html",
                "分类": "电视剧$2#电影$1#动漫$4#综艺$3"
            }
        },
        {
            "key": "高清影院",
            "name": "高清影院",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": {
                "分类url": "http://www.wuyevod.com/vodshow/{cateId}-{area}--{class}-----{catePg}---{year}.html",
                "分类": "电影$1#剧集$2#综艺$3#动漫$4#午夜$5"
            }
        },
        {
            "key": "一起影视",
            "name": "一起影视",
            "type": 3,
            "api": "csp_XBPQ",
            "ext": {
                "分类url": "http://www.cdlhmq.cn/search.php?page={catePg}&searchtype=5&tid={cateId}&year={year}&area={area};;d",
                "分类": "电视剧$2#电影$1#综艺$3#动漫$4#短剧$30"
            }
        },
        {
            "key": "七味",
            "name": "七味｜磁力",
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
            "name": "80S｜磁力",
            "type": 3,
            "api": "csp_BLSGod",
            "playerType": 1,
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "美剧迷",
            "name": "美剧迷｜磁力",
            "type": 3,
            "api": "csp_MeijuMi",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "狐狸君",
            "name": "狐狸君｜磁力",
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
            "name": "美剧天堂｜磁力",
            "type": 3,
            "api": "csp_MeijuTT",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "电影天堂",
            "name": "电影天堂｜磁力",
            "type": 3,
            "api": "csp_DyGod",
            "searchable": 1,
            "quickSearch": 1,
            "filterable": 1
        },
        {
            "key": "哔哩合集",
            "name": "哔哩｜合集",
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
            "name": "哔哩｜音乐",
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
            "name": "哔哩｜听书",
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
            "name": "哔哩｜相声",
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
            "name": "哔哩｜小品",
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
            "name": "哔哩｜视频",
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
            "name": "哔哩｜直播",
            "type": 3,
            "api": "./py/哔哩直播.py"
        },
        {
            "key": "csp_Music",
            "name": "🎵MUSIC┃听歌",
            "type": 3,
            "api": "csp_Music",
            "quickSearch": 0,
            "timeout": 12,
            "searchable": 0,
            "ext": "",
            "jar": "./xiaomi.php"
        },
        {
            "key": "更新",
            "name": "PG｜更新",
            "type": 3,
            "api": "csp_Market",
            "searchable": 0,
            "changeable": 0,
            "indexs": 0,
            "ext": "https://d.kstore.dev/download/11474/market1.json"
        },
        {
            "key": "本地包",
            "name": "潇洒｜信息",
            "type": 3,
            "api": "csp_Market",
            "searchable": 0,
            "changeable": 0,
            "indexs": 0,
            "ext": "https://pizazz.s3.bitiful.net/single.json"
        },
        {
            "key": "push_agent",
            "name": "手机｜推送",
            "type": 3,
            "api": "csp_Push",
            "searchable": 0,
            "filterable": 0,
            "changeable": 0
        }
    ],
    "parses": [
        {
            "name": "自动解析",
            "type": 1,
            "url": "https://api.tyun77.cn/api.php/provide/parseDicturl?url=",
            "ext": {
                "flag": [
                    "qq",
                    "腾讯",
                    "qiyi",
                    "爱奇艺",
                    "奇艺",
                    "youku",
                    "优酷",
                    "sohu",
                    "搜狐",
                    "letv",
                    "乐视",
                    "mgtv",
                    "芒果",
                    "imgo",
                    "rx",
                    "ltnb",
                    "bilibili",
                    "1905",
                    "xigua"
                ]
            }
        },
        {
            "name": "手动解析",
            "type": 1,
            "url": "https://www.playm3u8.cn/jiexi.php?url=",
            "ext": {
                "flag": [
                    "qq",
                    "腾讯",
                    "qiyi",
                    "iqiyi",
                    "爱奇艺",
                    "奇艺",
                    "youku",
                    "优酷",
                    "mgtv",
                    "芒果",
                    "letv",
                    "乐视",
                    "pptv",
                    "PPTV",
                    "sohu",
                    "bilibili",
                    "哔哩哔哩",
                    "哔哩"
                ]
            }
        },
        {
            "name": "三瓜俩枣",
            "type": 1,
            "url": "https://api.huohua.live/api/?key=FJER9kOhK71YTePV3d&url=",
            "ext": {
                "flag": [
                    "qq",
                    "腾腾",
                    "qiyi",
                    "爱",
                    "艺",
                    "youku",
                    "酷酷",
                    "mgtv",
                    "芒",
                    "imgo",
                    "letv",
                    "乐视",
                    "pptv",
                    "PPTV",
                    "sohu",
                    "bilibili",
                    "哔哩哔哩",
                    "哔哩"
                ],
                "header": {
                    "User-Agent": "okhttp/4.1.0"
                }
            }
        },
        {
            "name": "火花解析",
            "type": 1,
            "url": "https://api.huohua.live/api/?key=f8K2OcCDxIBRqVmanb&url=",
            "ext": {
                "flag": [
                    "qq",
                    "腾腾",
                    "qiyi",
                    "爱",
                    "艺",
                    "youku",
                    "酷酷",
                    "mgtv",
                    "芒",
                    "imgo",
                    "letv",
                    "乐视",
                    "pptv",
                    "PPTV",
                    "sohu",
                    "bilibili",
                    "哔哩哔哩",
                    "哔哩"
                ],
                "header": {
                    "User-Agent": "okhttp/4.1.0"
                }
            }
        },
        {
            "name": "h5-JS",
            "type": 0,
            "url": "https://h5.freejson.xyz/player/?url=",
            "ext": {
                "flag": [
                    "qq",
                    "腾",
                    "qiyi",
                    "爱",
                    "奇",
                    "youku",
                    "优",
                    "mgtv",
                    "芒",
                    "imgo",
                    "letv",
                    "乐视",
                    "pptv",
                    "PPTV",
                    "sohu",
                    "bilibili",
                    "哔哩哔哩",
                    "哔哩"
                ],
                "header": {
                    "User-Agent": "okhttp/4.1.0"
                }
            }
        },
        {
            "name": "1号线",
            "type": 0,
            "url": "https://vip.lianfaka.com/vip/?url=",
            "ext": {
                "flag": [
                    "qq",
                    "腾讯",
                    "qiyi",
                    "爱奇艺",
                    "奇艺",
                    "youku",
                    "优酷",
                    "mgtv",
                    "芒果",
                    "letv",
                    "乐视",
                    "pptv",
                    "PPTV",
                    "sohu",
                    "bilibili",
                    "哔哩哔哩",
                    "哔哩"
                ],
                "header": {
                    "User-Agent": "okhttp/4.1.0"
                }
            }
        },
        {
            "name": "2号线",
            "type": 0,
            "url": "https://jx.777jiexi.com/player/?url="
        },
        {
            "name": "3号线",
            "type": 0,
            "url": "https://jx.xmflv.com/?url="
        },
        {
            "name": "4号线",
            "type": 0,
            "url": "https://www.pouyun.com/?url="
        },
        {
            "name": "5号线",
            "type": 0,
            "url": "https://api.jiexi.la/?url="
        },
        {
            "name": "6号线",
            "type": 0,
            "url": "https://www.pangujiexi.com/pangu/?url="
        },
        {
            "name": "7号线",
            "type": 0,
            "url": "https://parse.mw0.cc/?url="
        },
        {
            "name": "8号线",
            "type": 0,
            "url": "https://jx.iztyy.com/svip/?url="
        },
        {
            "name": "9号线",
            "type": 0,
            "url": "https://jx.ppflv.com/?url="
        },
        {
            "name": "10号线",
            "type": 0,
            "url": "https://jx.m3u8.tv/jiexi/?url="
        },
        {
            "name": "11号线",
            "type": 0,
            "url": "https://jx.xyflv.com/?url="
        },
        {
            "name": "12号线",
            "type": 0,
            "url": "https://jx.jsonplayer.com/player/?url="
        },
        {
            "name": "13号线",
            "type": 0,
            "url": "https://jx.bozrc.com:4433/player/?url="
        },
        {
            "name": "14号线",
            "type": 0,
            "url": "https://jx.parwix.com:4433/player/analysis.php?v=",
            "ext": {
                "flag": [
                    "qq",
                    "腾讯",
                    "qiyi",
                    "iqiyi",
                    "爱奇艺",
                    "奇艺",
                    "youku",
                    "优酷",
                    "mgtv",
                    "芒果",
                    "letv",
                    "乐视",
                    "pptv",
                    "PPTV",
                    "sohu",
                    "bilibili",
                    "哔哩哔哩",
                    "哔哩"
                ]
            }
        },
        {
            "name": "15号线",
            "type": 0,
            "url": "https://www.nxflv.com/?url="
        },
        {
            "name": "咸鱼",
            "type": 0,
            "url": "https://jx.xymp4.cc/?url=",
            "ext": {
                "header": {
                    "user-agent": "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36 Edg/134.0.3124.68"
                }
            }
        },
        {
            "name": "1080解析1",
            "type": 1,
            "url": "https://zy.qiaoji8.com/neibu.php?url=",
            "ext": {
                "flag": [
                    "qq",
                    "腾讯",
                    "qiyi",
                    "爱奇艺",
                    "奇艺",
                    "youku",
                    "优酷",
                    "sohu",
                    "搜狐",
                    "letv",
                    "乐视",
                    "mgtv",
                    "芒果",
                    "tnmb",
                    "seven",
                    "bilibili",
                    "1905"
                ],
                "header": {
                    "User-Agent": "okhttp/4.9.1"
                }
            }
        },
        {
            "name": "1080解析2",
            "type": 1,
            "url": "http://117.50.183.202:8036/?ip=111.55.12.236&url=",
            "ext": {
                "flag": [
                    "qq",
                    "腾讯",
                    "qiyi",
                    "爱奇艺",
                    "奇艺",
                    "youku",
                    "优酷",
                    "sohu",
                    "搜狐",
                    "letv",
                    "乐视",
                    "mgtv",
                    "芒果",
                    "tnmb",
                    "seven",
                    "bilibili",
                    "1905"
                ],
                "header": {
                    "User-Agent": "okhttp/4.9.1"
                }
            }
        },
        {
            "name": "777",
            "url": "https://jx.777jiexi.com/player/?url=",
            "type": 0,
            "ext": {
                "flag": [
                    "qiyi",
                    "imgo",
                    "爱奇艺",
                    "奇艺",
                    "qq",
                    "qq 预告及花絮",
                    "腾讯",
                    "youku",
                    "优酷",
                    "pptv",
                    "PPTV",
                    "letv",
                    "乐视",
                    "leshi",
                    "mgtv",
                    "芒果",
                    "sohu",
                    "xigua",
                    "fun",
                    "风行"
                ]
            },
            "header": {
                "User-Agent": "Mozilla/5.0"
            }
        },
        {
            "name": "8090g",
            "url": "https://www.8090g.cn/jiexi/?url=",
            "type": 0,
            "ext": {
                "flag": [
                    "qiyi",
                    "imgo",
                    "爱奇艺",
                    "奇艺",
                    "qq",
                    "qq 预告及花絮",
                    "腾讯",
                    "youku",
                    "优酷",
                    "pptv",
                    "PPTV",
                    "letv",
                    "乐视",
                    "leshi",
                    "mgtv",
                    "芒果",
                    "sohu",
                    "xigua",
                    "fun",
                    "风行"
                ]
            },
            "header": {
                "User-Agent": "Mozilla/5.0"
            }
        },
        {
            "name": "ik9",
            "url": "https://yparse.ik9.cc/index.php?url=",
            "type": 0,
            "ext": {
                "flag": [
                    "qiyi",
                    "imgo",
                    "爱奇艺",
                    "奇艺",
                    "qq",
                    "qq 预告及花絮",
                    "腾讯",
                    "youku",
                    "优酷",
                    "pptv",
                    "PPTV",
                    "letv",
                    "乐视",
                    "leshi",
                    "mgtv",
                    "芒果",
                    "sohu",
                    "xigua",
                    "fun",
                    "风行"
                ]
            },
            "header": {
                "User-Agent": "Mozilla/5.0"
            }
        },
        {
            "name": "虾米",
            "type": 0,
            "url": "https://jx.xmflv.com/?url=",
            "ext": {
                "header": {
                    "user-agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36 Edg/110.0.1587.57"
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
