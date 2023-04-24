<?php

function Koneksi()
{
  return mysqli_connect('localhost', 'root', 'root', 'pw2020_a22100069');
}

function Query($query)
{
  $conn = Koneksi();
  $result = mysqli_query($conn, $query);

  //jika hasilnya hanya 1 data
  if (mysqli_num_rows($result)) {
    return mysqli_fetch_assoc($result);
  }


  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
