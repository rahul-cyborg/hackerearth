n = gets.chomp.strip.to_i
arr = gets.chomp.strip.split(' ').map(&:to_i)
output = {}

arr.each do |input|
  output[input] = 1 if output[input].nil?
end
output.each do |key, value|
  print key
  print ' '
end