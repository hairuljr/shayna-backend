<?php

namespace App\Constants;


class TransactionStatus
{
  const PENDING = 'PENDING';
  const SUCCESS = 'SUCCESS';
  const FAILED = 'FAILDED';

  public static function labels(): array
  {
    return [
      self::PENDING => "PENDING",
      self::SUCCESS => "SUCCESS",
      self::FAILED => "FAILDED"
    ];
  }

  public static function label(string $stts)
  {
    return array_search($stts, self::labels());
  }

  public static function html($status)
  {
    switch ($status) {
      case self::PENDING:
        $html = '<span class="badge badge-warning">' . self::PENDING . '</span>';
        break;
      case self::SUCCESS:
        $html = '<span class="badge badge-success">' . self::SUCCESS . '</span>';
        break;
      case self::FAILED:
        $html = '<span class="badge badge-danger">' . self::FAILED . '</span>';
        break;
      default:
        $html = '<span class="badge badge-danger">ERROR</span>';
    }

    return $html;
  }
}
