<?php

function tanggal($date, $date_format)
{
  return Carbon::parse($date)->isoFormat($date_format);
}

function localDate($date, $date_format)
{
  return Carbon::parse($date)->translatedFormat($date_format);
}

function customDate($date, $date_format)
{
  return Carbon::parse($date)->format($date_format);
}

function dateHuman($date)
{
  return Carbon::parse($date)->diffForHumans();
}

function tanggalSekarang($date_format)
{
  return Carbon::now()->format($date_format);
}

function convert_to_slug($param)
{
  return Str::slug($param);
}

function capitalEachWords($words)
{
  return ucwords(strtolower($words));
}

function rupiah($param)
{
  return "Rp. " . number_format($param, 0, ',', '.');
}

function toastCreate($msg)
{
  toast($msg . ' berhasil ditambahkan', 'success');
}

function toastUpdate($msg)
{
  toast($msg . ' berhasil diubah', 'success');
}

function toastDelete($msg)
{
  toast($msg . ' telah dihapus', 'success');
}
