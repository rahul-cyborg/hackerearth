n = gets.chomp.strip.to_i
arr = gets.chomp.strip.split(' ').map(&:to_i).sort

 i = 1
 j = n - 1

 while i <= j
  val = arr.pop
  arr.insert(i, val)
  i += 2
 end

 sum = 0
 (1...n).each do |k|
  sum += (arr[k] - arr[k - 1]).abs
 end
print arr
puts sum
