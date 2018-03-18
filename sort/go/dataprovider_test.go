package sort

import (
	"os"
	"bufio"
	"strconv"
	)

// readLines reads a whole file into memory
// and returns a slice of its lines.
func readLines(path string) ([]int64, error) {
  file, err := os.Open(path)
  if err != nil {
    return nil, err
  }
  defer file.Close()

  var lines []int64
  scanner := bufio.NewScanner(file)
  for scanner.Scan() {
  	var line int64
  	line, _ = strconv.ParseInt(scanner.Text(), 10, 64)
    lines = append(lines, line)
  }
  return lines, scanner.Err()
}
