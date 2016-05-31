test_cases = gets.chomp.strip.to_i
out = []

hash_data = { 7 => 1, 6 => 2, 5 => 1, 4 => 2, 3 => 1, 2 => 1, 1 => 1 }

test_cases.times do
  value = 0
  num = gets.chomp.strip.to_i
  temp = num % 7
  count = num / 7
  value = hash_data[temp] if !hash_data[temp].nil?
  sum = count + value
  out << sum if sum != 0 && num != 1
  out << -1 if sum == 0 || num == 1
end

puts out