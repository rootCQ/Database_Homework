## 模板整合到本地

1. 将statics文件夹一整个复制粘贴到/advanced/frontend/web/中
2. 将AppAsset.php复制粘贴到/advanced/frontend/assets/中替换原文件(建议原文件先备份以免无法恢复)
3. main.php复制粘贴到/advanced/frontend/views/layouts/中替换原文件(建议原文件先备份以免无法恢复)

## Github使用

上传的PDF教程相比廖雪峰教程更简洁易懂一些，快速入门

> 教程里面有github alias的用法，可以快捷键操作git

总结了下最常用的命令：

- 更新本地仓库
  - 初次使用整个clone：git clone https://github.com/rootCQ/Database_Homework.git
  - 后面直接 git pull origin master
- git checkout -b dev 创建并转到分支dev
- git status 查看状态新替换的文件变绿才能push，
  - 如果是红色，使用git add <文件名>
- git diff 比较文件、分支、提交之间的差异
- git push origin master直接提交到master分支(懒)



