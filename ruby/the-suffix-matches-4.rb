input = gets.chomp.strip
test_cases = gets.chomp.strip.to_i

out = []

test_cases.times do
  len = gets.chomp.strip.to_i
  tmp_str = input[0,len].reverse
  last_str = (input[-len..-1] || input).reverse

  count = 0
  (0...tmp_str.length).each do |i|
    if tmp_str[i] == last_str[i]
      count += 1
    else
      break;
    end
  end
  out << count
end

puts out


