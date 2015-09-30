<?php
/**
 * Pluma
 * Sort data
*/

class sort_data {
  private $sort_type;
  private $sort_order;
  private $arr = array();
  function __construct( $in_sort_type, $in_sort_order, $in_arr ) {
    $this->sort_type = $in_sort_type;
    $this->arr = $in_arr;
    $this->sort_order = $in_sort_order;
  }
  function sort () {
    if ( $sort_type === "users_lastname" && $sort_order === "ascending" ) {
      self::sort_users_lastname_ascending();
    } else if ( $sort_type === "users_lastname" && $sort_order === "descending" ) {
      self::sort_users_lastname_descending();
    }
  }
  function sort_users_lastname_ascending() {
    // Bubble sort
    for ( $i = 0; $i < sizeof ( $arr ) - 1; $i++ ) {
      for ( $j = 0; $j < $size-1-$i; $j++ ) {
        if ( self::compare ( $arr[$j], $arr[$j+1] ) == -1 ) {
          $temp = $arr[$j];
          $arr[$j] = $arr[$j+1];
          $arr[$j+1] = $temp;
        }
      }
    }
  }
  function get_array() {
    return $arr;
  }
  function compare ( $orig, $comp ) {
    if ( sizeof ( $orig ) > sizeof ( $comp ) ) {
      $len = sizeof ( $comp );
      $longer = $orig;
    } else {
      $len = sizeof ( $orig );
      $longer = $comp;
    }
    $compResult = 0;
    for ( $i = 0; $i < $len; $i++ ) {
      if ( $orig[$i] > $comp[$i] ) {
        $compResult = 1;
        break;
      } else if ( $orig[$i] < $comp[$i] ) {
        $compResult = -1;
        break;
      }
    }
    return $compResult;
  }
}
  
