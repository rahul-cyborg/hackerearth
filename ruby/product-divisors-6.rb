require 'prime'
n = gets.chomp.strip.to_i
arr = gets.chomp.strip.split(' ').map(&:to_i)
product = arr.inject(:*)

temp = product.prime_division

out = 1
temp.each do |temp_arr|
  out *= (temp_arr[1] + 1)
end

puts out % 1000000007

