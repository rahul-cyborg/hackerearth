test_cases = gets.chomp.strip.to_i
out = []

test_cases.times do
  first = gets.chomp.strip.to_s
  second = gets.chomp.strip.to_s
  if first.include?(second)
    out << 'YES'
  else
    out << 'NO'
  end
end
puts out