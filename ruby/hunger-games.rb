num = gets.chomp.strip.to_i
arr = gets.chomp.strip.split(' ').map(&:to_i)
tmp = arr.sort
out = []
out << tmp[0]
(1...num).each do |i|
  temp = tmp[i]
  out << temp if i % 2 != 0
  out.unshift(temp) if i % 2 == 0
end

max = (out[0] - out [num - 1]).abs


(1...num).each do |i|
  diff = (out[i] - out[i - 1]).abs
  max = diff if diff > max
end

puts max
