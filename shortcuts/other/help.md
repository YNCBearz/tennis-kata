
## [Git]

### git rev-parse <branch-name> : 取得<branch-name>的commit sha

---

## [Mac]

### pbcopy : 在terminal中複製

```zsh
$ cat myfile.txt | pbcopy
```

```zsh
$ echo 'Hello' | pbcopy
```

```zsh
$ git rev-parse origin/develop | pbcopy
```

### pbpaste : 在terminal中貼上

```zsh
$ pbpaste > bear-test.md
```

### symbolic link

```zsh
$ ln -s /Users/bear.hsiung/Documents/bear-setting/.vimrc .vimrc
```

---

## [Windows]

### symbolic link

- 以系統管理員身份執行Powershell
```zsh
$ cd ~
$ New-Item -ItemType SymbolicLink -Path ".vimrc" -Target ".\Documents\bear-setting\.vimrc"
```

---