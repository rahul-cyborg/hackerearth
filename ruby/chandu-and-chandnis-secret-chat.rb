test_cases = gets.chomp.strip.to_i

input = []

test_cases.times do
  input << gets.chomp.strip.split(' ')
end


out = []

(0...input.length).each do |i|
  str = input[i][0].to_s
  ind = input[i][1].to_i

  rev_str = str.split('').sort.reverse.join

  hash = Hash.new

  (0...str.length).each do |i|
    hash[str[i]] = rev_str[i]
  end
  
  print hash
  
  tmp = str[ind - 1]
  temp = ''
  count = 0

  while count < str.length
    count += 1
    temp += tmp
    tmp = hash[tmp]
  end 
  out << temp
end

puts out