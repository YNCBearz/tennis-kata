## **[Normal Mode]**

### h : left
### j : down
### k : up
### l : right
--------------------------------
### ^ : 跳到該行第一個非空白字元
### $ : 跳到行尾
--------------------------------
### w / W : 往後跳到最近 字的開頭
### b : 往前跳到最近 字的開頭
### e : 往後跳到最近 字的結尾
### ge : 往前跳到最近 字的結尾
### f + [character] : 往後跳轉到該字
### F + [character] : 往前跳轉到該字
### t + [character] : 往後跳轉到該字前
### T + [character] : 往前跳轉到該字後
--------------------------------
### gg : 跳到頁首
### G : 跳到頁尾
### {line}gg : 跳到指定行
--------------------------------
### Esc / Ctrl + [ : enter Normal Mode
--------------------------------
### ctrl + ] / gd : go to definition
### ctrl + o : 回到上一頁
### ctrl + i : 回到下一頁
--------------------------------
### i : insert before the cursor
### a : insert after the cursor
### o : insert a new line after the cursor
### O : insert a new line above the cursor
--------------------------------
### gt: 下一個分頁
### gT: 上一個分頁
### {number} + gt: 第{number}個分頁
--------------------------------
### X : delete
### x : backspace 刪除游標所在處的字元
--------------------------------
### dd : 刪除行
### D : 刪除至行尾
### d (+3) w : 刪除 (+3) 字
### dab : delete a block surrounded by (
### daB : delete a block surrounded by {
--------------------------------
### u : undo
### ctrl + r : redo
--------------------------------
### zt : 拖曳當前位置到最上方
### zb : 拖曳當前位置到最下方
### zz : 拖曳當前位置到中間
--------------------------------
### ctrl-u : Moves cursor & screen up ½ page
### ctrl-d : Moves cursor & screen down ½ page
### ctrl-b : Moves screen up one page, cursor to last line
### ctrl-f : Moves screen down one page, cursor to first line
--------------------------------
### ciw : 刪除當前字並新增
### cw : 刪除當前字至字尾並新增
### ci" : change something inside double quotes
### cc : change entire line
--------------------------------
### r : 取代單個字
--------------------------------
### (number) + dd : 刪除下面 (number) 行
--------------------------------
### { : 往前跳一個 paragraph
### } : 往後跳一個 paragraph
--------------------------------
### gc : 註解 (ex. gcc, gc2j )
### gC : 註解 (ex. gCi} )
--------------------------------
### dt(+character) : 刪除到 (character) 前的字
### df(+character) : 刪除到 (character) 的字
--------------------------------
### ; : repeat last find(f) command
### . : repeat last command
--------------------------------
## **[vim-surround]**

### ys w { : 到下一個字的周圍加上 {
### yS w { : 到下一個字的周圍加上 {，並新增一行
### yss ( : 對整行的周圍加上 (
### ySS ( : 對整行的周圍加上 (，並新增一行
--------------------------------
## **[easy motion]**

### <leader><leader> w/b : 向前/向後到可見範圍字的開頭
### <leader><leader> e/ge : 向前/向後到可見範圍字的結尾
### <leader><leader> t/T : 向前/向後到可見範圍的字符(<char>)位置
### <leader><leader> k/j : 向前/向後到可見範圍任何行的行首
--------------------------------
### cmd + <number> : 切換視窗
### ctrl + hjkl : 在視窗間移動 （自訂）
--------------------------------
--------------------------------
## **[Insert Mode]**

### ctrl + n : autocomplete next
### ctrl + p : autocomplete previous
--------------------------------
### ctrl + w : delete the last word you typed
### ctrl + u : delete the last line you typed
--------------------------------
--------------------------------
## **[Visual Mode]**

### v : enter visual mode
### V : select the line
### (+"a) y : 將選取部分存至暫存器 (+a)
### (+"a) p : 將暫存器 (+a)的內容貼上
### d : cut
### yy : 複製當前行
### yap : 複製段落 (method)

### cmd + d gb : 選取多個相同字
--------------------------------
## **[vim-surround]**

### S { : 已選字的周圍加上 {
### gS { : 已選字的周圍加上 {，並新增一行
--------------------------------
--------------------------------
## **[Command Mode]**

### :sp {nameoffile} : 往下分割視窗
### :vsp {nameoffile} : 往右分割視窗

### :6,10s/foo/bar/g : 取代6~10行的foo成bar
--------------------------------
--------------------------------
## **[Search Mode]**

### /{string} : 搜尋有{string}的地方
### :noh : 清除search highlight
--------------------------------