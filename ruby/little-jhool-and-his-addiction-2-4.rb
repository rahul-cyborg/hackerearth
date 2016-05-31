test_cases = gets.chomp.strip.to_i

input = []
arr = []

test_cases.times do
  input << gets.chomp.strip.split(' ').map(&:to_i)
  arr << gets.chomp.strip.split(' ').map(&:to_i)
end

out = []
(0...input.length).each do |i|
  temp_input = input[i]
  k = temp_input[1]
  temp_arr = arr[i]
  sorted = temp_arr.sort
  ans_arr = []
  (0...sorted.length / 2).each do |k|
    temp_lenght = sorted.length
    sum = sorted[k] + sorted[temp_lenght - k - 1]
    ans_arr << sum
  end
  max = ans_arr.max
  min = ans_arr.min
  ans = max - min 
  out << ans
  if ans == k
    out << "Lucky chap!"
  elsif ans > k
    out << "No more girlfriends!"
  else
     out << "Chick magnet Jhool!"
  end
end

puts out