test_cases = gets.chomp.strip.to_i

input = []
n = 2 * test_cases
test_cases.times do  
  input <<  gets.chomp.strip.split(' ').map(&:to_i)
  input <<  gets.chomp.strip.split(' ').map(&:to_i)
end

out = []

(0...n).step(2).each do |i|
  num =  input[i][0]
  k = input[i][1]

  arr =  input[i+1]
  sum = 0;
  sum_arr = []

  arr.each do |val|
    if val <= k
      sum += val
      sum_arr << sum
    else
      sum = 0 
    end
  end

max = sum_arr.max
out << max
end

puts out