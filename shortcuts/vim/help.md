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

### m + [a-zA-Z] : 在當前位置標記 {a-zA-Z} (小寫為當前檔案、大寫為全局)

### ' + [a-zA-Z] : 跳到標記該行的開頭

### '' : 回到緩衝區的該行

### `` : 回到緩衝區的標記位置

### ` + [a-zA-Z] : 跳到標記該行的標記位置

### :delm + [a-zA-Z] : 刪除標記 (連續刪除 :delm a-c, 所有小寫刪除 :delm!)

### :marks : 查看當前的標記

### c'a : 修改至標記a的該行

### d`a : 刪除至標記a位置

--------------------------------

### gg : 跳到頁首

### G : 跳到頁尾

### {line}gg : 跳到指定行

--------------------------------

### H : 移到目前螢幕的最上方

### L : 移到目前螢幕的最下方

### zt : 拖曳當前位置到最上方

### zb : 拖曳當前位置到最下方

### zz : 拖曳當前位置到中間

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

### ctrl-u : Moves cursor & screen up ½ page

### ctrl-d : Moves cursor & screen down ½ page

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

### % : jump to a matching opening or closing parenthesis, bracket or curly brace

--------------------------------

### gc : 註解 (ex. gcc, gc2j )

### gC : 註解 (ex. gCi} )

--------------------------------

### dt(+character) : 刪除到 (character) 前的字

### df(+character) : 刪除到 (character) 的字

--------------------------------

### . :  repeat  a normal/insert-mode command

### @: : repeat a command-line command

### ; : repeat command (用f/F找字的command)

--------------------------------

## **[vim-surround]**

### ys [motion] [desired] : Add desired surround around text defined by <motion>

### ys iw[ (iw is a text object) : 當前字的周圍加上 []

### ys fr[ : 到r的字周圍加上 []]

### ys w { : 到下一個字的周圍加上 {}

### yss ( : 對整行的周圍加上 ()

### vS ( : Visual Mode後，在選取區域加上()

--------------------------------

## **[easy motion]**

### <leader><leader> w/b : 向前/向後到可見範圍字的開頭

### <leader><leader> e/ge : 向前/向後到可見範圍字的結尾

### <leader><leader> t/T : 向前/向後到可見範圍的字符(<char>)位置

### <leader><leader> k/j : 向前/向後到可見範圍任何行的行首

--------------------------------

### cmd + <number> : 切換視窗

### ctrl + w + hjkl : 在視窗間移動

### ctrl + hjkl : 在視窗間移動 （自訂）

--------------------------------

## **[Insert Mode]**

### ctrl + n : autocomplete next

### ctrl + p : autocomplete previous

--------------------------------

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

### yi" : 複製""內的文字 (不含"")

### ya" : 複製""內的文字 (含"")

### cmd + d gb : 選取多個相同字

### U : uppercase

### u : lowercase

--------------------------------

## **[Command Mode]**

### :sp {nameoffile} : 往下分割視窗

### :vsp {nameoffile} : 往右分割視窗

### :6,10s/foo/bar/g : 取代6~10行的foo成bar

--------------------------------

## **[Search Mode]**

### /{string} : 往下搜尋有{string}的地方

### ?{string} : 往上搜尋有{string}的地方

### :noh : 清除search highlight

--------------------------------

## **[Visual Block Mode]**

### ctrl + v : 進入Visual Block Mode，搭配I（大寫i） / A（大寫A）可多行編輯

--------------------------------