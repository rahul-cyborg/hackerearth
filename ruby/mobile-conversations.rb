test_cases = arr = gets.chomp.strip.to_i

input = []

test_cases.times do
  input <<  gets.chomp.strip.split(' ').map(&:to_i)
end

data = input.sort


min = data[0][0]
total_gain = data[0][1]

(1...data.length).each do |i|
  arr = data[i]
  t = arr[0]
  g = arr[1] 

  if t > total_gain
    min = t
  end
  total_gain += g - t

end

puts min