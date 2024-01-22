const kanri = document.querySelector('#kanri');
const kanribtn = document.querySelector('#kanribtn');

// CSVファイルを取得
let csv = new XMLHttpRequest();
 
// CSVファイルへのパス
csv.open("GET", "data.csv", false);
 
// csvファイル読み込み失敗時のエラー対応
try {
  csv.send(null);
} catch (err) {
  console.log(err);
}
 
// 配列を定義
let csvArray = [];
 
// 改行ごとに配列化
let lines = csv.responseText.split(/\r\n|\n/);
 
// 1行ごとに処理
for (let i = 0; i < lines.length; ++i) {
  let cells = lines[i].split(",");
  if (cells.length != 1) {
    csvArray.push(cells);
  }
}
 
// コンソールに配列を出力
console.log(csvArray);

kanri.addEventListener('keyup', onKeyUp);//テキストエリアに何かを入力した瞬間に発動

function onKeyUp(){    
  var K = kanri.value;  
  
if (K == "all delete") { //一文字でも入っているならボタンを押せるようにする
		kanribtn.disabled = false;
    kanribtn.onclick = function() {
    }
} else {
		kanribtn.disabled = true;
};

window.addEventListener('load',() => {
	loading.classList.add('loaded');
  });
}