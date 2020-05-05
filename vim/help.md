## **[Normal Mode]**

### h : left
### j : down
### k : up
### l : right
--------------------------------
### ^ : 跳到該行第一個非空白字元
### $ : 跳到行尾
--------------------------------
### w / W : 往後跳到最近 字的開頭 (忽略標點)
### b : 往前跳到最近 字的開頭
--------------------------------
### gg : 跳到頁首
### G : 跳到頁尾
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
--------------------------------
### X : delete
### x : backspace
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

## **[Insert Mode]**

### ctrl + n : autocomplete next
### ctrl + p : autocomplete previous

--------------------------------
### ctrl + h : delete the last character you typed
### ctrl + w : delete the last word you typed
### ctrl + u : delete the last line you typed
--------------------------------
## **[Visual Mode]**

### v : enter visual mode
### V : select the line
### (+"a) y : 將選取部分存至暫存器 (+a)
### (+"a) p : 將暫存器 (+a)的內容貼上
### d : cut
### yy : 複製當前行
### yap : 複製段落 (method)
--------------------------------
## **[easy motion]**

### <leader><leader> w/b : 向前/向後到可見範圍字的開頭
### <leader><leader> e/ge : 向前/向後到可見範圍字的結尾
### <leader><leader> t/T : 向前/向後到可見範圍的字符(<char>)位置
### <leader><leader> k/j : 向前/向後到可見範圍任何行的行首
--------------------------------