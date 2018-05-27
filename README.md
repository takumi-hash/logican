# logican
## 環境
- PHP:7.2
- Laravel:5.6
- mysql:5.7 (これから導入)

## DB構成(仮)
https://cacoo.com/diagrams/jfg23AFhH9seEfDK/edit

## クローン時
```
git clone https://github.com/team-burgundy/logican.git
```
```
cd logican
```
```
composer install
```
```
cp -p .env.example .env
```
```
php artisan key:generate
```
```
php artisan serve
```

## 作業時
ブランチの作成
```
git checkout -b 作業するブランチの名前
```
```
git add -A
```
```
git commit -m "作業した内容"
```
```
git push origin 作業したブランチの名前
```
その後PRをだし、相互に確認。

## 作業終了後(マージ後)
```
git checkout master
```
最新の状況を反映
```
git pull origin master
```
