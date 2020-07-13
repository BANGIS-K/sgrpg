<?php
require_once('model.php');

/**
 * Charaモデル
 *
 * @version 1.0.0
 * @author  M.Katsube <katsubemakito@gmail.com>
 */
class CharaModel extends Model{
  protected $tableName = 'Chara';  // 対象テーブル

  /**
   * キャラクターの名前を返却する
   *
   * @param integer $charaid
   * @return string
   */
  function getCharaName($charaid){
    $sql = 'SELECT name FROM Chara WHERE id = :charaid';
    $bind = [ ['name'=>':charaid', 'value'=>$charaid, 'type'=>PDO::PARAM_INT] ];
    $this->query($sql, $bind);
    return( $this->fetch() );
  }
}
