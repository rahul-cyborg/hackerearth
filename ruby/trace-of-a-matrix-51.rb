n = gets.chomp.strip.to_i

output = []

n.times do
  arr = gets.chomp.strip.split(' ')
  row = arr[0].to_i
  column = arr[1].to_i
  m1 = []
  m2 =[]
  count = 1
  sum = 0;
  (0...row).each do |i|
    tmp = []
    (0...column).each do |j|
      tmp << count
      sum += count if i == j
      count += 1
    end
    m1 << tmp
  end
  
output << 2*sum
end
puts output