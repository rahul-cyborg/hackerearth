temp = gets.chomp.strip.split(' ').map(&:to_i)

n = temp[0]
k = temp[1]

arr = gets.chomp.strip.split(' ').map(&:to_i).sort
sum = 0
count = 0
(0...n).each do |i|
  sum += arr[i]
  count += 1
  if sum > k
    puts count - 1
    break;
  end
end