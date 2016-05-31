n = gets.chomp.strip.to_i
arr = gets.chomp.strip.split(' ').map(&:to_i).sort.reverse!

n1 = gets.chomp.strip.to_i
temp_arr = gets.chomp.strip.split(' ').map(&:to_i)
max = temp_arr.max
s = temp_arr.inject(0){|sum,x| sum + x }
if s >= n
  sum = 0
  k = 0
  (1..max).each do |i|
    len = temp_arr.length
    sum += i * (arr[k,len].inject(0){|sum,x| sum + x }) if arr[k,len] != nil
    k += len
    temp_arr = temp_arr.collect { |elem| elem - 1 }
    temp_arr = temp_arr - [0]
  end
else
  sum = -1
end

puts sum