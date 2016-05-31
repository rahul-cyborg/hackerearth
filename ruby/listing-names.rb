test_cases = gets.chomp.strip.to_i

hash = {}

test_cases.times do
  key = gets.chomp.strip
  hash[key] += 1 if !hash[key].nil?
  hash[key] = 1 if hash[key].nil?
end
temp = hash.sort
temp.each do |arr|
  puts arr[0].to_s + ' ' + arr[1].to_s
end