test_cases = gets.chomp.strip.to_i

input = []

test_cases.times do
  input << gets.chomp.strip.split(' ').map(&:to_i)
end

temp = []

(0...input.length).each do |i|
  sum = input[i][0]
  val = input[i][1]
  ((i+1)...input.length).each do |j|
    if val <= input[j][1]
      sum += input[j][0]
      val = input[j][1]
    end
  end
  temp << sum
end

puts temp.max