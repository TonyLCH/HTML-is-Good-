# 蕭維均的HTML自學筆記
#### 我是非資訊相關出身(哲學系)
#### 我會一面學習一面將學到的放置於此
#### 以下是我預計要放上的內容
##### (如果有任何錯誤歡迎告訴我)
# 1. 一個網頁的基礎
![IMG01](https://github.com/AlexTrinityBlock/HTML-is-Good-/blob/master/resource/base_1.png?raw=true)
# 2. html基礎文字結構
#### 1.h1~6(標題)
#### 2.p(段落)
#### 3.hr(水平分隔線)
#### 4.br(換行)
#### 5.pre(按照原始碼中的文字格式)
#### 6.blockquote(縮排)
#### 7.ol-li(有序標籤)
#### 8.ul-li(無序標籤)
#### 9.dl(有標題的文字格式)-dt(標題)-dd(內文)
![IMG02](https://github.com/AlexTrinityBlock/HTML-is-Good-/blob/master/resource/webtext.png?raw=true)
# 3.文字類型
#### 1.b是用於標示人名或專有名詞
#### 2.strong用來強調重點
#### 3.i是斜體
#### 4.em是強調(也是斜體)
#### 5.mark文字高量顯示
#### 6.mall小型字
#### 7.s刪除線
#### 8.del也是刪除線
#### 9.u文字下線
#### 10.ins也是文字下線，意義是新增的內容
#### 11.sup上標字
#### 12.sub下標字
![IMG03](https://github.com/AlexTrinityBlock/HTML-is-Good-/blob/master/resource/IMG3.png?raw=true)
# 4.div與span區塊
#### &lt;div&gt;&lt;/div&gt;
#### &lt;span&gt;&lt;/span&gt;
![IMG4](https://github.com/AlexTrinityBlock/HTML-is-Good-/blob/master/resource/IMG4.png?raw=true)
# 5.語意標籤
### 語意標籤不會產生改變版面的功效
### 它就像註釋一樣，是為了方便讀html代碼的人，理解其中的意義與分布
#### 1.header
#### 2.nav導覽列
#### 3.article文章
#### 4.section章節
#### 5.aside側欄
#### 6.footer頁尾
![IMG5](https://github.com/AlexTrinityBlock/HTML-is-Good-/blob/master/resource/IMG5.png?raw=true)
# 6.站外超連結
![IMG6](https://github.com/AlexTrinityBlock/HTML-is-Good-/blob/master/resource/IMG6.png?raw=true)
# 7.站內超連結
#### 在為標籤設定id之後，超連結的目標指向那個id，就可以自動跳躍至頁面的那個位置
#### 對於網頁裡面含有很長的文檔時非常適合當作索引
#### &lt;標籤 id="標籤名稱" &gt;
#### &lt;a href="#標籤名稱"&gt;連結文字&lt;/a&gt;
![IMG7](https://github.com/AlexTrinityBlock/HTML-is-Good-/blob/master/resource/IMG7.png?raw=true)
# 8.插入圖片
#### &lt;img src="圖片連結" width="寬" height="高" alt="破圖時的註解" &gt;
![IMG8](https://github.com/AlexTrinityBlock/HTML-is-Good-/blob/master/resource/IMG8.png?raw=true)
# 9-1.插入影片
#### &lt;video controls  autoplay loop width="寬度" height="高度"&gt;
#### &lt;source src="影片連結" type="video/檔案格式"&gt;
#### 瀏覽器無法支援時的提示
#### &lt;/video&gt;
![IMG10](https://github.com/AlexTrinityBlock/HTML-is-Good-/blob/master/resource/IMG10.png?raw=true)
# 9-2.插入音樂
#### &lt;audio 控制項&gt;
#### &lt;source src="檔案位址" type="audio/檔案類型"&gt;
#### 音樂無法撥放時的顯示
#### &lt;/audio&gt;
#### --------------
#### 控制項:
#### 1.載入完畢時自動撥放 autoplay
#### 2.顯示控制器controls
#### 3.循環撥放loop
#### 4.撥放時保持靜音muted
#### 5.載入控制 preload="載入控制項" 
#### 載入控制項:1.沒有輸入任何東西=按下撥放紐之後才開始載入 2.auto=自動載入 
![IMG9](https://github.com/AlexTrinityBlock/HTML-is-Good-/blob/master/resource/IMG9.png?raw=true)
## 注意:MP3/4是最多瀏覽器支援的格式
# 其他功能
## 表格
#### table建立表格
#### border最外層的外框粗細單位為px像素
#### width,height單位為像素或%
#### cellspacing內框之間與外框的距離單位為像素
#### cellpadding字元與像素邊界的距離
#### tr建立橫向的列
#### th建立直向的欄(表頭)(字粗一點)
#### td建立一般的欄位
#### colspan合併欄位,數值=要合併的欄位數
#### rowspan合併列，只是機制奇怪，個人較少使用
![IMG11](https://github.com/AlexTrinityBlock/HTML-is-Good-/blob/master/resource/IMG11.png?raw=true)

