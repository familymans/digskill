<?php
    class Human {
        protected const BR = '<br>';
        protected const HR = '<hr>';
        protected const KEYWORD_MORNING = '朝';
        protected const KEYWORD_AFTERNOON = '昼';
        protected const KEYWORD_EVENING = '夜';
        protected const MESSAGE_MORNING = 'おはようございます！';
        protected const MESSAGE_AFTERNOON = 'こんにちは！';
        protected const MESSAGE_EVENING = 'こんばんは！';
        protected const MESSAGE_OTHER = '朝・昼・夜でお答えください';
        
        protected $name = '';//クラスと継承したクラスからのみ参照できるプロパティ。「人間が記憶しておくための領域」
        
        public function __construct(string $name){//コンストラクタという特別なメソッド。自分の名前を$this->nameに記憶している
            $this->name = $name;
        }
        
        public function greet(string $target,string $now){
            echo static::HR;
            echo 'わたしの名前は「'.$this->name.'」です！'.static::BR;//なぜかひょうじされない
            echo 'あなたのお名前は「'.htmlspecialchars($target).'」さんですね！'.static::BR;
            echo '今は「'.htmlspecialchars($now).'」ですね！'.static::BR;
            echo $this->getGreetMessage($now);//クラスの外部からも呼び出せるメソッド。名前と時間帯を受け取り、、挨拶する。
            
        }
        
        protected function getGreetMessage($now) : string {
            $message = static::MESSAGE_OTHER;
            if($now === static::KEYWORD_MORNING){
                $message = static::MESSAGE_MORNING;
            }elseif($now === static::MESSAGE_AFTERNOON){
                $message = static::KEYWORD_AFTERNOON;
            }elseif($now === static::MESSAGE_EVENING){
                $message = static::KEYWORD_EVENING;
            }
            
            return $message;
        }
        
    }
?>
