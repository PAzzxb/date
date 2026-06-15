{
    "engine_name": "JSON API & Proxy Engine",
    "version": "2.0.0 (No-Token & Obfuscated Version)",
    "description": "直接访问接口将返回系统所有可用的 API 动作及调用方法指南。",
    "base_url": "https://tiktok.xvideos4.tk/api.php",
    "endpoints": [
        {
            "action": "list",
            "name": "获取流媒体列表接口",
            "method": "GET",
            "description": "从目标站拉取媒体列表，并自动将图片、视频和 M3U8 地址转换为通过本服务器代理的混淆链接。",
            "parameters": {
                "sort": "排序方式可选：daily (每日), weekly (每周), monthly (每月), favorite (收藏榜)",
                "category": "分类筛选关键词 (如：anime)",
                "q": "全局搜索关键词",
                "page": "当前页码，默认为 1"
            },
            "example_url": "https://tiktok.xvideos4.tk/api.php?action=list&sort=daily&page=1"
        },
        {
            "action": "proxy-img",
            "name": "图片中转代理",
            "method": "GET",
            "description": "代理并输出远程图片，自动绕过防盗链限制，带有长效缓存控制。",
            "parameters": {
                "url": "经过 tvz_ 混淆加密后的远程图片真实地址"
            },
            "example_url": "https://tiktok.xvideos4.tk/api.php?action=proxy-img&url=tvz_cGcq5SZsBXbhNnRyUSbvNmLlpXY2Vnc0ZkMlYkMlE0MlMHc0RHa"
        },
        {
            "action": "proxy-video",
            "name": "视频 302 跳转 (MP4 等格式)",
            "method": "GET",
            "description": "解密混淆地址后 302 临时跳转到原始视频地址，由播放器直接请求源站。",
            "parameters": {
                "url": "经过 tvz_ 混淆加密后的远程视频真实地址"
            },
            "example_url": "https://tiktok.xvideos4.tk/api.php?action=proxy-video&url=tvz_QDct5SZsBXbhNnRyUSbvNmLlpXY2Vnc0ZkMlYkMlE0MlMHc0RHa"
        },
        {
            "action": "proxy-m3u8",
            "name": "M3U8 302 跳转",
            "method": "GET",
            "description": "解密混淆地址后 302 临时跳转到原始 M3U8 地址，由播放器直接请求源站 HLS 流。",
            "parameters": {
                "url": "经过 tvz_ 混淆加密后的远程 M3U8 真实地址"
            },
            "example_url": "https://tiktok.xvideos4.tk/api.php?action=proxy-m3u8&url=tvz_gTdz0mL0NXaslXYsBnRyUycshmRyUSbvNmLlpXY2Vnc0ZkMlYkMlE0MlMHc0RHa"
        },
        {
            "action": "refresh",
            "name": "直链异步刷新接口",
            "method": "GET",
            "description": "通过视频唯一 ID 单独刷新并获取最新的动态加密播放代理直链。",
            "parameters": {
                "id": "目标视频的 url_cd 或者是原始 ID"
            },
            "example_url": "https://tiktok.xvideos4.tk/api.php?action=refresh&id=12345"
        }
    ]
}