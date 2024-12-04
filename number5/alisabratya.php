<?php

function sistersCount($n, $m) {
  if ($n <= 0 || $m <= 0) {
    throw new InvalidArgumentException("Количество братьев и сестер должно быть больше 0.");
  }
  return $n + 1;
}

try {
  echo sistersCount(3, 2);
  echo sistersCount(5, 4)
  echo sistersCount(1, 0);
  echo sistersCount(0, 2);
  echo sistersCount(2, -1);

} catch (InvalidArgumentException $e) {
  echo "Ошибка: " . $e->getMessage();
}

?>