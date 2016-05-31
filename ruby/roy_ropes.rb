test_cases = gets.chomp.strip.to_i
out = []

test_cases.times do
  len = gets.chomp.strip.to_i
  up = gets.chomp.strip.split(' ').map(&:to_i)
  down = gets.chomp.strip.split(' ').map(&:to_i)

  max_val = 0
  (0...len - 1).each do |i|
    max_val = max_val - 1 if max_val > 0
    curr = [up[i],down[i]].max
    max_val = [max_val,curr].max
  end
  max_val = max_val - 1 if max_val > 0
  tmp = len + max_val
  out << tmp
end

puts out