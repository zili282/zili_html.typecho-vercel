![](banner.png)

<p align="center">
<img src="https://img.shields.io/badge/build-passing-brightgreen.svg?style=flat-square"> 
<img src="https://img.shields.io/badge/made%20with-%E2%9D%A4-ff69b4.svg?style=flat-square"> 
<a href="LICENSE"><img src="https://img.shields.io/badge/license-SATA-blue.svg?style=flat-square"></a> 
<a href="https://typecho.org"><img src="https://img.shields.io/badge/for-Typecho-blueviolet.svg?style=flat-square"></a> 
<a href="https://github.com/BigCoke233/miracles/releases"><img src="https://img.shields.io/github/v/release/BigCoke233/miracles?color=red&style=flat-square"></a> 
<a href="https://github.com/BigCoke233/miracles/graphs/contributors"><img src="https://img.shields.io/github/contributors/BigCoke233/miracles?color=orange&style=flat-square"></a> 

<p align="center"><strong>记录你心中的奇迹，书写你自己的篇章</strong></p>

---

## 停更说明

~~Miracles 目前已经停止更新，除非有严重的 bug，这个版本基本是不会再维护了。~~

**2022/11/14 更新说明**：因为发现还有人用所以就稍微更新了一下，但没有发布正式版。主要内容是修复 bug 和移除一些不必要的功能，同时替换了 Alertify，使用 [Toaster](https://github.com/BigCoke233/toaster.js)

如果你感兴趣的话，可以支持一下我的[新主题 Matcha](https://github.com/BigCoke233/matcha)。

---

## 🎨 特色

- 响应式 / 自适应设计
- Pjax 全站无刷新
- Ajax 评论无刷新
- 支持系统切换夜间模式
- 调用 bilibili API 显示追番页面
- 前台登录
- 图片懒加载
- 代码高亮 / 行号
- 不错的兼容性
    - 夜间模式下的 Pio 插件按钮样式
    - 夜间模式下的 Aplayer 播放器
    - Bilibili 外链长宽比例
- 良好的阅读体验
    - 阅读时长估计
    - 字数统计
    - 两种可供选择的字体（思源宋体/黑体）
- 不错的自定义性能
    - 两种可供选择的导航栏
    - 多种图片懒加载动画供选择
    - 黑白滤镜（哀悼模式）
- 灵活的友情链接功能
- 方便排版的短代码
- 后台设置备份

### 预览

[作者博客](https://guhub.cn/) | [Miracles 常用页面元素示例](https://guhub.cn/miracles-content-style-demo.html)

## 🚀 使用

1. Star 本项目（遵循 SATA-BNP 开源协议）
2. 下载**最新的 [Release](https://github.com/BigCoke233/miracles/releases)**
3. 确保自身 PHP 环境在 7.1.0 及以上版本，并装有 CURL 拓展（否则一些功能无法正常使用）
4. 解压后，**确认目录名为`Miracles`（M 大写）**
5. 将文件夹放入 Typecho 根目录下的`usr/themes/`
6. 到后台-外观-可用的主题中，启用主题
7. **根据 [wiki](docs/wiki.md)** 配置主题

<details><summary>使用开发版</summary><br>

直接下载仓库，或者使用 git 命令行进行克隆。
```git
$ git clone https://github.com/BigCoke233/miracles.git
```
> 不推荐使用开发版，因为可能有不确定的不稳定因素，并且不一定有有利改动<br>如果你使用开发版出现任何问题，欢迎通过 issue 反馈，在等待回复期间请使用发行版

</details>
<details><summary>遇到问题</summary><br>

如果在使用过程中遇到了任何问题，可以先阅读本主题的 [Wiki](docs/wiki.md)，并进行一些简单的确认：清理浏览器缓存，更换网络环境，确保 Console 内没有提示访问不到文件等自身原因。如果你无法靠自己解决问题，可以尝试联系作者，但记住**开发者没有为你解决问题的义务，只是出于好心的帮助。**  
在确认你遇到的现象确实是一个 Bug 后，请在 [Issues](https://github.com/BigCoke233/miracles/issues) 提交问题，并为该问题尽可能的描述清楚，按照提供的 issue 模板进行填写，谢谢配合。

</details>
<details><summary>关于版权</summary><br>

主题基于 SATA-BNP 协议开源，使用前你需要给这个项目点一个 Star，使用或转发时**请保留版权信息**，禁止倒卖。若需二次开发后发布，请邮件通知我`hi#guhub.cn`，并保留原作者版权信息及仓库链接。在最近（2020-5-28），我将 SATA 协议修改为了 SATA-BNP 协议，即不能将软件用作任何政治相关的用途，特别是政治宣传，但是按原文转载相关政治家的书籍、文章，不含有任何倾向的解读也是可以接受的。同时，如果发现有侵权行为，请告知我，屡教不改者将被列入[黑名单](docs/black-list.md)，删除版权的用户不会在遇到问题时受到来自作者的帮助，在后期可能会加入删除版权网站设置项失效的惩罚。

</details>

### 更新日志

**Ver.1.6.0 Your best nightmare**

- 新增：支持自定义「导航栏图标按钮」
- 新增：文章目录（使用 {:toc:} 在文中插入目录）
- 新增：归档页面中添加「文章分类」栏目
- 新增：支持快速写入`<details>`的短代码，并使用垫片优化兼容性
- 新增：加入 html 压缩
- 新增：多语言功能
- 新增：兼容 typecho 评论反垃圾
- 新增：高级设置
- 新增：可选择主题字体 CDN 了
- 新增：可以使用 TimThumb 裁剪文章缩略图了（需要在高级设置 themeConfig.php 里打开）
- 优化：夜间模式下，notice 块的背景色
- 优化：导航栏毛玻璃效果调整
- 优化：导航栏透明度调整
- 优化：将 kbd 的短代吗语法修改为 [[kbd]]
- 优化：用 canvas 替换代码块的 mac 按钮图片
- 优化：鼠标移动到文章卡片标题上时显示完整标题
- 优化：将 FancyBox 和 Lazyload 替换为 gazeimg
- 优化：归档页面，折叠往年的文章列表
- 优化：用 localStorage 储存 theme，代替 cookie [#57](https://github.com/BigCoke233/miracles/issues/57)
- 优化：在 php 层检测 faviconDark，避免前台出现 404 报错
- 优化：模板设置备份中，判断 $_POST['type'] 存在后再进行备份处理，防止不必要的报错和其他风险
- 优化：归档页面 meta 元信息
- 优化：改进番剧页面（Done by Kengwang）
- 优化：将 title 改为 hint.css 提供的 tooltip
- 优化：将鼠标悬停在文章元信息上时，会显示对应的 tooltip
- 优化：用 alertify.js 替换自己的提示框
- 优化：页面/文章评论列表隐藏时，不显示评论数
- 优化：将设置项「Pjax 完成后执行事件」更改为更准确的「Pjax 回调函数」
- 修复：一个存在了超久的拼写错误（paresNav=>parseNav）
- 修复：archive 页面（即分类、标签、搜索等）文章头图问题
- 修复：暴力解决访问密码文章时被 pjax 强制刷新的问题
- 修复：评论区 owo 表情换行
- 修复：标签、分类页面不显示文章缩略图
- 修复：删除不必要的判断
- 修复：自定义随机图失效
- 修复：解决随机颜文字可能报错的问题
- 修复：评论列表缺失 #comments id

> 所有历史版本的更新日志请查看[这里](docs/change-log.md)

## 📝 计划

- [x] 优化：用 localStorage 替换储存夜间/日落模式等的 cookie
- [x] 新增：支持快速写入`<details>`的短代码，并使用[垫片](https://github.com/javan/details-element-polyfill)优化兼容性
- [x] 新增：添加语言包功能，通过 php 数组储存各个语言版本的文字
- [x] 优化：文章缩略图自动剪裁
- [x] 优化：页面/文章评论列表隐藏时，不显示评论数
- [x] 优化：支持用 jsDelivr 加速主题内置图片的速度
- [ ] 增加：内置站点缓存规则
- [ ] 优化：「说说页面」的样式
- [ ] 新增：图片横向排版「相册功能」（参考：https://blog.imalan.cn/archives/282/）
- [ ] 新增：全站加密功能
- [ ] 新增：支持 PWA - 渐进式 Web 应用
- [ ] 新增：嵌入 GitHub 仓库 / 用户（以卡片形式展示）
- [ ] 新增：根据 cid 嵌入本站文章（以卡片形式展示）
- [ ] 新增：文章目录
- [ ] 优化：密码提示（可在加密文章中自定义对密码的提示）
- [ ] 新增：全站公告
- [ ] 优化：对日间模式/日落模式/夜间模式的切换通过下拉面板操作，并支持禁用主题跟随系统设置
- [ ] 新增：导航支持下拉面板
- [ ] 优化：优化夜间模式的切换机制

## 💖 鸣谢

> 这些都是在开发过程中给予我帮助的项目和大佬！

### 开源项目

- [jQuery](https://github.com/jquery/jquery) - 若干开源项目和主题内一些 js 的前置
- [Highlight.js](https://github.com/highlightjs/highlight.js) - 代码高亮
- [Hightlight-line-numbers](https://github.com/wcoder/highlightjs-line-numbers.js) - 代码行号
- [Pjax](https://github.com/defunkt/jquery-pjax) - Pjax 预加载
- [Nprogress](https://github.com/rstacruz/nprogress) - Pjax 滚动条动画
- [OwO](https://github.com/DIYgod/OwO) - 评论 OwO 表情
- [Pangu.js](https://github.com/vinta/pangu.js) -分割中英文字符
- [Normalize.css](http://necolas.github.io/normalize.css/) - 保证不同浏览器上各元素 css 默认效果相同
- [qrcode.js](https://github.com/davidshimjs/qrcodejs) - 生成文章二维码
- [gazeimg](https://github.com/ganxiaozhe/gazeimg) - 图片懒加载 & 灯箱
- [details-element-polyfill](https://github.com/javan/details-element-polyfill) - 优化 details 标签兼容性
- [hint.css](https://kushagra.dev/lab/hint/) - 工具提示 Tooltip
- [toaster.js](https://github.com/BigCoke233/toaster.js/) - Toast 提示框
~~- [alertify](https://github.com/MohammadYounes/AlertifyJS) - 对话框和 snackbar(notifier)~~
- [TableContents](https://github.com/lutdev/table-contents) - 生成文章目录
- ~~[LazyLoad](https://github.com/tuupola/lazyload) - 图片懒加载~~（开发版已用新的方案替换）
- ~~[FancyBox](https://github.com/fancyapps/fancybox) - 文章图片灯箱~~（开发版已用新的方案替换）

### 贡献者

这里只列出贡献「相对较大」的贡献者，所有的贡献者名单请到[这里](https://github.com/BigCoke233/miracles/graphs/contributors)查看

| 贡献者 | 贡献内容 |
| ------ | ------- |
| [@BigCoke233 (Eltrac)](https://github.com/BigCoke233) | 原作者 / 主要维护者 |
| [@outtimes](https://github.com/outtimes) | 提供各种有用的功能 |
| [@ohmyga233](https://github.com/ohmyga233) | 实现 Ajax 评论无刷新 |
| [@kengwang](https://github.com/kengwang) | 提供追番页面 |

### 参考

[VOID](https://github.com/AlanDecode/Typecho-Theme-VOID) | [Castle](https://github.com/ohmyga233/castle-Typecho-Theme) | [Holakit](https://github.com/wenxuanjun/Holakit) | [Material](https://github.com/idawnlight/typecho-theme-material) | [Mirages](https://get233.com/archives/mirages-intro.html)

## 🔮 相关

演示站点：~~[我的博客](https://guhub.cn)~~（博客是第二代版本）  
介绍文章：[Miracles —— 生为奇迹](https://guhub.cn/p/miracles.html)  
说明文档：[Wiki.md](docs/wiki.md) | [Notion(被墙了,故停止维护)](https://www.notion.so/eltrac/c7c631e21b3345caa2a09bd2fb5dd4b2)   
更新日志：[change-log.md](docs/change-log.md)  
侵权网站：[black-list.md](docs/black-list.md)

## 🎁 捐助

你可以通过[爱发电](https://afdian.net/@Eltrac)向我投食，~~用金钱催更~~；或是在 [Open Collective](https://opencollective.com/miracles) 上为 Miracles 进行捐献  
又或者是用支付宝扫码支付，感谢投食，~~据说砸得越多更新越快~~~

<img src="alipay.png" width="70%">

---

Copyright &copy; 2019-2020 [Eltrac](https://github.com/BigCoke233), released under [SATA-BNP License](https://github.com/BigCoke233/miracles/blob/master/LICENSE).
