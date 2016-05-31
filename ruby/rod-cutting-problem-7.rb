test_cases = gets.chomp.strip.to_i
input = []
test_cases.times do
  input << gets.chomp.strip.to_i
end

data = []

(2..30).each do |i|
  data << (2 ** i) - 1
end


out = []

input.each do |num|
  count = 0
  count += 1 if data.include?(num)
  while num != 1
    if num.odd?
      num = num / 2
      first = num
      second = first + 1
      count += 1 if data.include?(first)
      count += 1 if data.include?(second)
    else
      num = num / 2
    end
  end
  out << count
end

puts out

