var rule = {
    title: '来看',
    host: 'https://nkvod.com/',
    url: '/show/fyclass--------fypage---.html',
    searchUrl: '/index.php/rss.xml?wd=**',
    searchable: 2,
    quickSearch: 0,
    filterable: 0,
    headers: {
        'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36',
        'Referer': 'https://nkvod.com/'
    },
    timeout: 10000, // 增加超时时间
    class_name: '电影&电视剧&综艺&动漫',
    class_url: '1&2&3&4',
    play_parse: true,
    lazy: $js.toString(() => {
        // 优化播放地址解析
        let html = request(input, {headers: rule.headers});
        let match = html.match(/r player_(.*?)=(.*?)</);
        if (match && match[2]) {
            try {
                let playerData = JSON.parse(match[2]);
                let url = playerData.url;
                const encryptType = playerData.encrypt || '0';
                
                // 处理不同加密类型
                switch(encryptType) {
                    case '1':
                        url = unescape(url);
                        break;
                    case '2':
                        url = base64Decode(url);
                        break;
                    case '3': // 新增解密支持
                        url = CryptoJS.enc.Base64.parse(url).toString(CryptoJS.enc.Utf8);
                        break;
                }
                
                // 直接返回有效播放地址
                if (/\.(m3u8|mp4)/.test(url)) {
                    input = {
                        jx: 0,
                        url: url,
                        parse: 0,
                        header: rule.headers
                    };
                    return;
                }
            } catch (e) {
                log('解析错误:' + e.message);
            }
        }
        // 默认解析模式
        input = {
            jx: 0,
            url: input,
            parse: 1,
            header: rule.headers
        };
    }),
    double: true,
    推荐: '.public-list-con;li;a&&title;.lazyload&&data-src;.public-list-subtitle&&Text;a&&href',
    一级: '.public-list-box li;a&&title;img&&data-src;.public-list-subtitle&&Text;a&&href',
    二级: {
        title: 'h1&&Text;.hl-ma0&&Text',
        img: '.mask-1&&data-src',
        desc: ';;;.slide-info:eq(0) span:eq(1)&&Text;.slide-info:eq(1) span:eq(1)&&Text;.slide-info:eq(2) span:eq(1)&&Text',
        content: '.detail-content&&Text',
        tabs: '.anthology-tab&&a',
        lists: '.anthology-list-play:eq(#id) li',
        list_text: 'a&&Text',
        list_url: 'a&&href'
    },
    搜索: $js.toString(() => {
        // 优化搜索解析
        let data = request(input, {headers: rule.headers});
        let d = [];
        let items = pdfa(data, 'rss>item');
        items.forEach(item => {
            d.push({
                title: pdfh(item, 'title&&Text'),
                url: pdfh(item, 'link&&Text'),
                desc: pdfh(item, 'pubDate&&Text'),
                pic_url: pdfh(item, 'description&&img&&src')
            });
        });
        setResult(d);
    })
};