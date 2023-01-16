function tri(numbers, ordre) {
    if (ordre === "asc") {
      numbers.sort(function(a, b) {
        return a - b;
      });
    } else if (ordre === "desc") {
      numbers.sort(function(a, b) {
        return b - a;
      });
    }
    return numbers;
  }  